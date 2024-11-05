<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\galerController;
use App\Http\Controllers\admin\kontenController;
use App\Http\Controllers\admin\pembayaranController;
use App\Http\Controllers\admin\programController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kandidatController;
use App\Http\Controllers\landingpageController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('landingpage');
// });

Route::controller(landingpageController::class)->group(function(){
    Route::get('/','index')->name('/');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth',AdminMiddleware::class])->group(function(){

        //controller program
        Route::controller(programController::class)->group(function(){
            Route::get('/program','programIndex')->name('program');
            Route::get('/program/addProgram','addProgram')->name('addProgram');
            Route::post('/simpanProgram','store')->name('programStore');
            Route::post('/simpanProgram','store')->name('programStore');
            Route::get('/editProgram/{id}/edit','editProgram')->name('editProgram');
            Route::put('/updateProgram/{id}','update')->name('updateProgram');
            Route::delete('/deleteProgram/{id}','destroy')->name('deleteProgram');

        });

        //controller konten
        Route::controller(kontenController::class)->group(function(){
            Route::get('/dashboard','dashboard')->name('dashboard');
            Route::get('/addKonten','addKonten')->name('addKonten');
            Route::post('/simpanKonten','store')->name('kontenStore');
            Route::get('/editKonten/{id}/edit','editKonten')->name('editKonten');
            Route::put('/updateKonten/{id}','update')->name('updateKonten');
            Route::delete('/deleteKonten/{id}','destroy')->name('deleteKonten');
        });
        //controller galeri
        Route::controller(galerController::class)->group(function(){
            Route::get('/galeri','indexGaleri')->name('galeri');
            Route::get('/addGaleri','addGaleri')->name('addGaleri');
            Route::post('/simpanGaleri','store')->name('galeriStore');
            Route::get('/editGaleri/{id}','editGaleri')->name('editGaleri');
            Route::put('/updateGaleri/{id}','update')->name('updateGaleri');
            Route::delete('/deleteGaleri/{id}','destroy')->name('deleteGaleri');

        });

        Route::controller(pembayaranController::class)->group(function(){
            Route::get('/pembayaran','index')->name('pembayaran');
            Route::get('/addPembayaran','addPembayaran')->name('addPembayaran');
            Route::post('/simpanPembayaran','store')->name('pembayaranStore');
            Route::get('/editPembayaran/{id}','edit')->name('editPembayaran');
            Route::put('/updatePembayaran/{id}','update')->name('updatePembayaran');
            Route::delete('/deletePembayaran/{id}','destroy')->name('deletePembayaran');
        });
        Route::controller(kandidatController::class)->group(function(){
            Route::get('/kandidat','homeKandidat')->name('kandidat');
            Route::get('/addKandidat','addKandidat')->name('addKandidat');
            Route::post('/simpanKandidat','store')->name('kandidatStore');
        });
    });
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard')->middleware(UserMiddleware::class);

