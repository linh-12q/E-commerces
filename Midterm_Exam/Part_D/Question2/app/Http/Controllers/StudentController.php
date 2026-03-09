<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model

class StudentController extends Controller
{
    // Part C - Question 2: Simple return method
    public function index()
    {
        return "This is Student Controller";
    }

    // Part D - Question 2: Handling Form Input
    public function store(Request $request)
    {
        // Capture PHP input using the Request object
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');

        // Logic to save to PostgreSQL would go here
        return "Received input for: " . $name;
    }
}
