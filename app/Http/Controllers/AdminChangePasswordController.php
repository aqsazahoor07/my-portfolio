<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminChangePasswordController extends Controller
{
    // Show change password form
    public function showChangeForm()
    {
        return view('admin.change-password');
    }

    // Change password
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $admin = Auth::guard('admin')->user();

        // Check current password
        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update password
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully!');
    }
}