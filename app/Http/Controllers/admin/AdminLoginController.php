<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }
        
            return redirect()->route('user.dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        

        // If authentication fails, redirect back with an error
        return redirect()->back()->withErrors(['Invalid credentials.']);
    }
}

