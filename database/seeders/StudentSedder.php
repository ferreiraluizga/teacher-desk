<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        Student::factory()->count(50)->make()->each(function ($student) use ($courses) {
            $student->course_id = $courses->random()->id;
            $student->save();
        });
    }
}
