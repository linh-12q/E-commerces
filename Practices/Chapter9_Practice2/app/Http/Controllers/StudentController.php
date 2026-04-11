<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function insertDemo()
    {
        if (Student::count() == 0) {
            Student::create([
                'name' => 'Dalinh',
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

            Student::create([
                'name' => 'John',
                'age' => 22,
                'major' => 'Engineering'
            ]);

            Student::create([
                'name' => 'Emma',
                'age' => 20,
                'major' => 'Medicine'
            ]);

            Student::create([
                'name' => 'Michael',
                'age' => 23,
                'major' => 'Law'
            ]);
        }

        return "6 students inserted successfully.";
    }

    public function index()
    {
        $students = Student::orderBy('id')->get();
        return view('students', compact('students'));
    }

    public function updateAge($id)
    {
        $student = Student::find((int)$id);

        if (!$student) {
            return "Student not found.";
        }

        $student->age = 25;
        $student->save();

        return "Student age updated successfully.";
    }

    public function deleteStudent($id)
    {
        $student = Student::find((int)$id);

        if (!$student) {
            return "Student not found.";
        }

        $student->delete();

        return "Student deleted successfully.";
    }
}
