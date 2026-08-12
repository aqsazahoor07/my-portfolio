<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminForgotPasswordController extends Controller
{
    // Show forgot password form
    public function showForgotForm()
    {
        return view('admin.auth.forgot-password');
    }

    // Send reset link email
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'We can\'t find a user with that email address.']);
        }

        // Generate token
        $token = Str::random(60);

        // Delete old tokens
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Save new token
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Generate reset link
        $resetLink = route('admin.password.reset', ['token' => $token, 'email' => $request->email]);

        // Log attempt
        Log::info('Password reset requested for: ' . $request->email);
        Log::info('Reset link: ' . $resetLink);

        try {
            // Send email
            $this->sendResetEmail($request->email, $resetLink);
            Log::info('Password reset email sent successfully to: ' . $request->email);
            
            return back()->with('success', 'We have emailed your password reset link!');
            
        } catch (\Exception $e) {
            Log::error('Mail send failed: ' . $e->getMessage());
            
            // Show link directly if email fails
            return back()->with([
                'warning' => 'Email could not be sent. Please use the link below.',
                'reset_link' => $resetLink
            ]);
        }
    }

    // Send reset email
    private function sendResetEmail($email, $resetLink)
    {
        $data = [
            'email' => $email,
            'resetLink' => $resetLink
        ];

        Mail::send('admin.auth.reset-email', $data, function ($message) use ($email) {
            $message->to($email)
                    ->subject('Reset Your Password - Admin Panel');
        });
    }

    // Show reset password form
    public function showResetForm(Request $request, $token = null)
    {
        $email = $request->email;
        return view('admin.auth.reset-password', compact('token', 'email'));
    }

    // Reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required'
        ]);

        // Check token
        $tokenData = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$tokenData) {
            return back()->withErrors(['email' => 'Invalid token or email.']);
        }

        // Check token expiry (60 minutes)
        $createdAt = Carbon::parse($tokenData->created_at);
        if ($createdAt->diffInMinutes(Carbon::now()) > 60) {
            return back()->withErrors(['email' => 'Token has expired. Please request a new reset link.']);
        }

        // Update password
        $admin = Admin::where('email', $request->email)->first();
        $admin->password = Hash::make($request->password);
        $admin->save();

        // Delete token
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        Log::info('Password reset successfully for: ' . $request->email);

        return redirect()->route('admin.login')->with('success', 'Your password has been reset successfully!');
    }
}