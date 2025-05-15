<?php

namespace Database\Seeders;

use App\Models\Average;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();

        foreach ($students as $student) {
            foreach (['1st', '2nd', '3rd', '4th'] as $period) {
                Average::factory()->create([
                    'student_id' => $student->id,
                    'period' => $period,
                ]);
            }
        }
    }
}
