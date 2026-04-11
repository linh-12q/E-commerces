<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function insertDemo()
    {
        if (Student::count() == 0) {
            Student::create([
                'name' => 'John',
                'age' => 20,
                'major' => 'IT'
            ]);

            Student::create([
                'name' => 'Sara',
                'age' => 21,
                'major' => 'Business'
            ]);

            Student::create([
                'name' => 'David',
                'age' => 19,
                'major' => 'Computer Science'
            ]);
        }

        return "3 students inserted successfully.";
    }

    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }
}