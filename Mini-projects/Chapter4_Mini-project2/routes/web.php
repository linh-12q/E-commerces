<?php

use Illuminate\Support\Facades\Route;

// 1. Home Page
Route::get('/', function () {
    return view('welcome');
});

// 2. Fake Login Page (To prevent crashes)
Route::get('/login', function () {
    return '<h1>Fake Login Page</h1>';
})->name('login');

// 3. Admin Panel Routes
Route::prefix('admin')
    ->name('admin.')
    // ->middleware('auth')  <-- Keep this disabled (//) for now so you can test easily!
    ->group(function () {

        // Route: /admin/users
        Route::get('/users', function () {
            // THIS is the key change: return the view, not text.
            return view('admin.users');
        })->name('users');

        // Route: /admin/settings
        Route::get('/settings', function () {
            return '<h1>Settings Page (Create a view for me later!)</h1>';
        })->name('settings');
    });
