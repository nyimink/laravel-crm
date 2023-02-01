<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence,
            "description" => $this->faker->paragraph,
            "deadline" => $this->faker->date,
            "user_id" => rand(1, 2),
            "client_id" => rand(1, 2),
        ];
    }
}
