<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Dalinh', 'age' => 20, 'major' => 'IT'],
            ['name' => 'Sara', 'age' => 21, 'major' => 'Business'],
            ['name' => 'David', 'age' => 19, 'major' => 'Computer Science'],
            ['name' => 'Lina', 'age' => 22, 'major' => 'Design']
        ];

        return view('students', compact('students'));
    }
}
