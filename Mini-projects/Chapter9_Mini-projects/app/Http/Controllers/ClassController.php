<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classs::all();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Classs::create($validated);
        return redirect()->route('classes.index')->with('success', 'Class created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classs $class)
    {
        $students = $class->students;
        return view('classes.show', compact('class', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classs $class)
    {
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classs $class)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $class->update($validated);
        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classs $class)
    {
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully!');
    }
}
