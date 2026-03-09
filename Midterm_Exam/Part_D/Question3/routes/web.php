<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'store']);
