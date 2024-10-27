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

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth',AdminMiddleware::class])->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\admin\AdminHomeController::class, 'dashboard'])->name('dashboard');
        Route::controller(programController::class)->group(function(){
            Route::get('/program','programIndex')->name('program');
            Route::get('/program/addProgram','addProgram')->name('addProgram');
        
        });
        // Route::get('/program',[HomeController::class,'programIndex'])->name('program');
    });
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard')->middleware(UserMiddleware::class);

