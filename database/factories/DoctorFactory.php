<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            // 'docter_id' => $this->faker->numberBetween(1,5),
            'email' => fake()->unique()->safeEmail(),
            'phone'=> $this->faker->numberBetween(3000000000,3999999999,),
            'status' => $this->faker->randomElement(['pending','active','cancelled']),

        ];
    }
}
