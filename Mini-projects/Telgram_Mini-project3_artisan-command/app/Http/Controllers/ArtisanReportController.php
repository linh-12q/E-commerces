<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanReportController extends Controller
{
    public function index()
    {
        $reports = [
            [
                'command' => 'php artisan list',
                'file'    => 'N/A (Console Output)',
                'purpose' => 'Lists all available Artisan commands and their descriptions.'
            ],
            [
                'command' => 'php artisan make:controller ArtisanReportController',
                'file'    => 'app/Http/Controllers/ArtisanReportController.php',
                'purpose' => 'Generates a new Controller class to handle logic.'
            ],
            [
                'command' => 'php artisan make:model ArtisanReport',
                'file'    => 'app/Models/ArtisanReport.php',
                'purpose' => 'Creates an Eloquent Model to represent data.'
            ],
            [
                'command' => 'php artisan make:migration create_artisanreports',
                'file'    => 'database/migrations/2024_01_01_create_artisanreports.php',
                'purpose' => 'Creates a database migration file for the table schema.'
            ]
        ];

        return view('artisanreport', ['reports' => $reports]);
    }
}
