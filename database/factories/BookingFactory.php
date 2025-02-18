<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'docter_id' => $this->faker->numberBetween(1,5),
            'user_id'=> $this->faker->numberBetween(1,5),
            'status' => $this->faker->randomElement(),
         
        ];
    }
}
