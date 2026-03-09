<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
              return view('welcome');
});

// The page where you see the form
Route::get('/login', [LoginController::class, 'showLogin']);

// The action that saves the user and shows the dashboard
Route::post('/login', [LoginController::class, 'store']);
