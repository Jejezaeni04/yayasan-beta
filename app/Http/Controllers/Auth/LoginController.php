<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated($request, $user)
    {
        // Check if the user has admin privileges
        if ($user->role === 'Admin') {
            return redirect()->route('admin.dashboard');
        }
    
        // Check if the user has kandidat privileges
        if ($user->role === 'Kandidat') {
            return redirect()->route('kandidat.dashboard');
        }
    
        // Default to user dashboard for regular users
        return redirect()->route('user.dashboard');
    }
    
}