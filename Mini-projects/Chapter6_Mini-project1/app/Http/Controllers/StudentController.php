<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        // The student array
        $students = [
            ['name' => 'Lam Dalinh', 'age' => 21],
            ['name' => 'Mey Ratanak', 'age' => 22],
            ['name' => 'khath Rithy Sak', 'age' => 21],
            ['name' => 'Sombour Kimron', 'age' => 20],
            ['name' => 'Som Sovanrothana', 'age' => 20],
        ];

        return view('students.index', compact('students'));
    }
}