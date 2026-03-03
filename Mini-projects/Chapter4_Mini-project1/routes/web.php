<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// List all students
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');

// Show one student
Route::get('/student/{id}', [StudentController::class, 'show'])
    ->name('students.show');



?>