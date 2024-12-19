<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "phone_no" => $this->faker->phoneNumber,
            "age" => $this->faker->numberBetween(15, 45),
            "gender" => $this->faker->randomElement([
                "male",
                "female"
            ])
        ];
    }
}
