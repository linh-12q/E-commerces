<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Blog List Page
Route::get('/posts', function () {
    $posts = [
        ['id' => 1, 'title' => 'Getting Started with Laravel', 'excerpt' => 'Learn the basics of the PHP framework...'],
        ['id' => 2, 'title' => 'Mastering Blade Templates', 'excerpt' => 'Blade makes UI development a breeze...'],
    ];
    return view('blog-list', compact('posts'));
});

// Blog Detail Page
Route::get('/posts/{id}', function ($id) {
    return view('blog-detail', ['id' => $id]);
});