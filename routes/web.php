<?php

use App\Http\Controllers\AdminChangePasswordController;
use App\Http\Controllers\AdminForgotPasswordController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Models\Document;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// ============================================================
// PUBLIC ROUTES
// ============================================================

// Home Page
Route::get('/', [PortfolioController::class, 'index'])->name('home');


// PDF View Route
Route::get('/cv/{id}', function ($id) {
    $document = Document::findOrFail($id);
    
    if (!Storage::disk('public')->exists($document->file_path)) {
        abort(404, 'File not found');
    }
    
    $filePath = Storage::disk('public')->path($document->file_path);
    $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    
    if ($extension === 'pdf') {
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $document->title . '.pdf"'
        ]);
    }
    
    return response()->download($filePath);
})->name('view.pdf');

// ============================================================
// ADMIN ROUTES
// ============================================================
Route::prefix('admin')->name('admin.')->group(function () {
    
    // ===== GUEST ROUTES (No Login Required) =====
    // Login
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    
    // Forgot Password
    Route::get('forgot-password', [AdminForgotPasswordController::class, 'showForgotForm'])->name('password.request');
    Route::post('forgot-password', [AdminForgotPasswordController::class, 'sendResetLink'])->name('password.email');
    
    // Reset Password
    Route::get('reset-password/{token}', [AdminForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [AdminForgotPasswordController::class, 'resetPassword'])->name('password.update');
    
    // ===== PROTECTED ROUTES (Admin Login Required) =====
    Route::middleware('auth:admin')->group(function () {
        
        // Logout
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        
        // Dashboard
        Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
        
        // Document Management
        Route::resource('documents', DocumentController::class);
        
        // Project Management
        Route::resource('projects', ProjectController::class);
        
        // Change Password
        Route::get('change-password', [AdminChangePasswordController::class, 'showChangeForm'])->name('password.change');
        Route::post('change-password', [AdminChangePasswordController::class, 'changePassword'])->name('password.change.update'); // ← Changed
        
        // Admin Management
        Route::get('create-admin', [AdminManagementController::class, 'showCreateForm'])->name('create');
        Route::post('create-admin', [AdminManagementController::class, 'createAdmin'])->name('create.store');
        Route::get('admins', [AdminManagementController::class, 'showAdmins'])->name('list');
        Route::delete('admin/{id}', [AdminManagementController::class, 'deleteAdmin'])->name('delete');
    });
});

// ============================================================
// Contact Routes
// ============================================================

// Contact Routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/feedback', [ContactController::class, 'storeFeedback'])->name('feedback.store');

// Admin Routes (Protected)
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    // Contacts
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
    Route::post('contacts/{id}/reply', [ContactController::class, 'reply'])->name('contacts.reply');
    Route::post('contacts/mark-read/{id}', [ContactController::class, 'markAsRead'])->name('contacts.mark-read');
    Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    
    // Feedbacks
    Route::get('feedbacks', [ContactController::class, 'feedbackIndex'])->name('feedbacks.index');
    Route::post('feedbacks/{id}/approve', [ContactController::class, 'approveFeedback'])->name('feedbacks.approve');
    Route::delete('feedbacks/{id}', [ContactController::class, 'deleteFeedback'])->name('feedbacks.delete');
});


// ============================================================
// DEBUG ROUTES (Development Only)
// ============================================================
Route::get('/debug-mail', function() {
    try {
        $logFile = storage_path('logs/laravel.log');
        $mailLog = storage_path('logs/mail.log');
        
        $logs = [
            'laravel_log_exists' => file_exists($logFile),
            'mail_log_exists' => file_exists($mailLog),
            'laravel_log_size' => file_exists($logFile) ? filesize($logFile) : 0,
            'mail_log_size' => file_exists($mailLog) ? filesize($mailLog) : 0,
        ];
        
        $mailConfig = [
            'default' => config('mail.default'),
            'host' => config('mail.mailers.smtp.host'),
            'port' => config('mail.mailers.smtp.port'),
            'username' => config('mail.mailers.smtp.username'),
            'encryption' => config('mail.mailers.smtp.encryption'),
        ];
        
        return response()->json([
            'status' => 'success',
            'logs' => $logs,
            'mail_config' => $mailConfig,
            'env_checks' => [
                'MAIL_MAILER' => env('MAIL_MAILER'),
                'MAIL_HOST' => env('MAIL_HOST'),
                'MAIL_PORT' => env('MAIL_PORT'),
                'MAIL_USERNAME' => env('MAIL_USERNAME'),
                'MAIL_ENCRYPTION' => env('MAIL_ENCRYPTION'),
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
});

// Pages Routes
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms.service');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('/documentation', [PageController::class, 'documentation'])->name('documentation');
