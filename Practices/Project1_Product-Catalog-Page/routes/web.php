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
Route::get('/products', function () {
    $products = [
        ['name' => 'Laravel for Beginners', 'price' => 49.99, 'stock' => 10],
        ['name' => 'Advanced Vue.js Guide', 'price' => 75.00, 'stock' => 0],
        ['name' => 'UI/UX Design Masterclass', 'price' => 29.99, 'stock' => 5],
        ['name' => 'PHP 8 Deep Dive', 'price' => 39.00, 'stock' => 0],
    ];

    return view('products', compact('products'));
});