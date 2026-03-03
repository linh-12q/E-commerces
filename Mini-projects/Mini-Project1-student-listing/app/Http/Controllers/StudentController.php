<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Requirement: Pass an array of student data
        $students = [
            ['id' => 1, 'name' => 'Dalinh', 'age' => '20'],
            ['id' => 2, 'name' => 'Det', 'age' => '22'],
            ['id' => 3, 'name' => 'Da', 'age' => '21'],
        ];

        return view('students', ['students' => $students]);
    }
}
