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
        $doctorSpecialties = [
            "Cardiologist",
            "Dentist",
            "Dermatologist",
            "Pediatrician",
            "Neurologist",
            "Orthopedic Surgeon",
            "Gynecologist",
            "Ophthalmologist",
            "Psychiatrist",
            "General Physician",
            "ENT Specialist",
            "Urologist",
            "Oncologist",
            "Radiologist",
            "Endocrinologist",
            "Gastroenterologist",
            "Pulmonologist",
            "Nephrologist",
            "Hematologist",
            "Rheumatologist"
        ];
        return [
            'image'=> "https://picsum.photos/300/300",
            'name' => $this->faker->name,
            "speciality" => $this->faker->randomElement($doctorSpecialties),
            'department_id' => $this->faker->numberBetween(1, 10),
            'experience' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug,
            'email' => fake()->unique()->safeEmail(),
            'phone' => $this->faker->numberBetween(30000000000, 300000000000),
            'rating' => $this->faker->numberBetween(0,5),
            'status' => $this->faker->randomElement(["pending", "active", "cancelled"]),

        ];
    }
}
