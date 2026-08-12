<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Document;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }

    public function dashboard()
    {
        // Get the logged-in admin
        $admin = Auth::guard('admin')->user();
        
        // Get all documents and projects
        $documents = Document::all();
        $projects = Project::all();
        
        // Pass admin data to view
        return view('admin.dashboard', compact('admin', 'documents', 'projects'));
    }
}