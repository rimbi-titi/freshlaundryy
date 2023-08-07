<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name($gender = 'male'|'female'),
            'telepon' => fake()->e164PhoneNumber(),
            'service_id' => fake()->numberBetween(1,4),
            'alamat' => fake()->address(),
            'bobot' => fake()->numberBetween(1,15),
            'status_id' => fake()->numberBetween(1,3),
            'user_id' => fake()->numberBetween(2,3),
        ];
    }
}
