<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('/students/insert', [StudentController::class, 'insertDemo']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/update-student/{id}', [StudentController::class, 'updateAge'])->where('id', '[0-9]+');
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->where('id', '[0-9]+');
