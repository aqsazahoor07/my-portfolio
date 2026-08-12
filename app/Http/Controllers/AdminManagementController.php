<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AdminManagementController extends Controller
{
    // Show create admin form
    public function showCreateForm()
    {
        return view('admin.create-admin');
    }

    // Create new admin
    public function createAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create new admin
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Send welcome email to new admin
        try {
            $this->sendWelcomeEmail($admin->email, $admin->name, $request->password);
        } catch (\Exception $e) {
            Log::error('Welcome email failed: ' . $e->getMessage());
        }

        return redirect()->route('admin.list')
            ->with('success', 'New admin created successfully! Welcome email sent to ' . $admin->email);
    }

    // Show all admins list
    public function showAdmins()
    {
        $admins = Admin::all();
        return view('admin.admins-list', compact('admins'));
    }

    // Delete admin
    public function deleteAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        
        // Prevent deleting yourself
        if ($admin->id == auth()->guard('admin')->id()) {
            return back()->withErrors(['error' => 'You cannot delete your own account.']);
        }

        $admin->delete();
        return back()->with('success', 'Admin deleted successfully!');
    }

    // Send welcome email
    private function sendWelcomeEmail($email, $name, $password)
    {
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'login_url' => route('admin.login')
        ];

        Mail::send('admin.emails.welcome-admin', $data, function ($message) use ($email) {
            $message->to($email)
                    ->subject('Welcome to Admin Panel - Aqsa Zahoor Portfolio');
        });
    }
}