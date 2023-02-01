<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "company" => $this->faker->company,
            "vat" => rand(1000, 6000),
            "address" => $this->faker->address,
            "phone" => $this->faker->phoneNumber,
            "email" => $this->faker->email,
        ];
    }
}
