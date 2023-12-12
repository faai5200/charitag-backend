<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show the login form
    public function index()
    {

        return view('admin.login');
    }


    // Handle the login request
    public function login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/admin/dashboard');
        } else {
            // Authentication failed
             return redirect()->route('admin.login')->withErrors(['error' => 'Invalid email or password']);

        }
    }


    // Logout the user
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
