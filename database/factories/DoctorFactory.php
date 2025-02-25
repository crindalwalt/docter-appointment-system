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
            'name' => $this->faker->name,
            // 'docter_id' => $this->faker->numberBetween(1,5),
            "speciality" => $this->faker->randomElement($doctorSpecialties),
            'department_id' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug,
            'email' => fake()->unique()->safeEmail(),
            'phone' => $this->faker->numberBetween(30000000000, 300000000000),
            'status' => $this->faker->randomElement(["pending", "active", "cancelled"]),

        ];
    }
}
