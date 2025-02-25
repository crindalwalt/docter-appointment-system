<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Department::factory(50)->create();


        Department::create([
            'name' => 'Cardiology Department',
        ]);

        Department::create([
            'name' => 'Neurology Department',
        ]);

        Department::create([
            'name' => 'Orthopedics Department',
        ]);

        Department::create([
            'name' => 'Pediatrics Department',
        ]);

        Department::create([
            'name' => 'Oncology Department',
        ]);

        Department::create([
            'name' => 'Emergency Medicine Department',
        ]);

        Department::create([
            'name' => 'Gynecology and Obstetrics Department',
        ]);

        Department::create([
            'name' => 'Radiology Department',
        ]);

        Department::create([
            'name' => 'General Surgery Department',
        ]);

        Department::create([
            'name' => 'Dermatology Department',
        ]);

    }
}
