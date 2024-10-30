<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\programController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landingpage');
});

Route::controller(programController::class)->group(function(){
    Route::get('/program','programIndex')->name('program');
    Route::get('/program/addProgram','addProgram')->name('addProgram');

});

Route::get('/register', function () {
    return view('user.register');
});

Route::get('/reset', function () {
    return view('user.reset');
});


Route::get('/login', function () {
    return view('user.login');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard')->middleware(UserMiddleware::class);

