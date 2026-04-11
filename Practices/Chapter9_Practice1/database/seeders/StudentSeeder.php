<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
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
}