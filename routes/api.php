<?php

use App\Http\Controllers\admin\kontenController;
use Illuminate\Support\Facades\Route;

Route::apiResource('kontens', kontenController::class);
