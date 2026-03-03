<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Function to show the Users Page
    public function users()
    {
        // You can fetch real users here later: $users = User::all();
        return view('admin.users'); // This looks for a file in resources/views/admin/users.blade.php
    }

    // Function to show the Settings Page
    public function settings()
    {
        return view('admin.settings'); // This looks for resources/views/admin/settings.blade.php
    }
}
