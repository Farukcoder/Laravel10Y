<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            "age" => $this->faker->numberBetween(15,20),
            "email" => $this->faker->email(),
            "address" => $this->faker->address(),
            "city" => $this->faker->city(),
            "phone" => $this->faker->phoneNumber(),
            "password" => $this->faker->password()

        ];
    }
}
