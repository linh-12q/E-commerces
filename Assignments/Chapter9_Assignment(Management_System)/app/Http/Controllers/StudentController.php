<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
              // Show all students
              public function index()
              {
                            $students = Student::all();
                            return view('students', compact('students'));
              }

              // Show form to create student
              public function create()
              {
                            return view('create');
              }

              // Store new student
              public function store(Request $request)
              {
                            Student::create($request->all());
                            return redirect()->route('students.index')
                                          ->with('success', 'Student created successfully');
              }

              // Show form to edit student
              public function edit(Student $student)
              {
                            return view('edit', compact('student'));
              }

              // Update student
              public function update(Request $request, Student $student)
              {
                            $student->update($request->all());
                            return redirect()->route('students.index')
                                          ->with('success', 'Student updated successfully');
              }

              // Delete student
              public function destroy(Student $student)
              {
                            $student->delete();
                            return redirect()->route('students.index')
                                          ->with('success', 'Student deleted successfully');
              }
}
