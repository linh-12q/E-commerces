<?php

use App\Http\Controllers\ArtisanReportController;
use Illuminate\Support\Facades\Route;

Route::get('/artisanreport', [ArtisanReportController::class, 'index']); 
?>
