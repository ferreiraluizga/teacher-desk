<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Average>
 */
class AverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'participation' => $this->faker->randomFloat(2, 0, 10),
            'book' => $this->faker->randomFloat(2, 0, 10),
            'extra_job' => $this->faker->randomFloat(2, 0, 10),
            'pratical_class' => $this->faker->randomFloat(2, 0, 10),
            'final_exam' => $this->faker->randomFloat(2, 0, 10),
            'recovery_exam' => $this->faker->randomFloat(2, 0, 10),
            'period' => $this->faker->randomElement(['1st', '2nd', '3rd', '4th']),
        ];
    }
}
