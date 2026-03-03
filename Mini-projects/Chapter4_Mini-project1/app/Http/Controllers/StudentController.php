<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'Vandet', 'age' => 20],
            ['id' => 2, 'name' => 'Sokha', 'age' => 21],
            ['id' => 3, 'name' => 'Dalinh', 'age' => 22],
        ];

        return view('students.index', compact('students'));
    }

    public function show($id)
    {
        $students = [
            1 => ['id' => 1, 'name' => 'Vandet', 'age' => 20],
            2 => ['id' => 2, 'name' => 'Sokha', 'age' => 21],
            3 => ['id' => 3, 'name' => 'Dalinh', 'age' => 22],
        ];

        if (!isset($students[$id])) {
            abort(404);
        }

        return view('students.show', ['student' => $students[$id]]);
    }
}
