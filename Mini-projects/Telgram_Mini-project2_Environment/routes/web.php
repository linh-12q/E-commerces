<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnvironmentController;

Route::get('/env-demo', [EnvironmentController::class, 'index']);

?>