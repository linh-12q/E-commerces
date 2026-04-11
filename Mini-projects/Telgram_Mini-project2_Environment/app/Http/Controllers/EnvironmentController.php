<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function index()
    {
        $data = [
            'appName'     => config('app.name'),
            'environment' => config('app.env'),
            'debugMode'   => config('app.debug')
        ];

        return view('env-demo', ['data' => $data]);
    }
}
?> 