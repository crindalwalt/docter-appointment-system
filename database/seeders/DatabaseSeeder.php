<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Department;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\AdminSeeder;
use Database\Seeders\DoctorSeeder;
use Database\Seeders\BookingSeeder;
use Database\Seeders\DepartmentSeeder;
use DeepCopy\Filter\Doctrine\DoctrineEmptyCollectionFilter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(5)->create();
        $this->call([
            AdminSeeder::class,
            BookingSeeder::class,
            DepartmentSeeder::class,
            DoctorSeeder::class,
        
    ]);
    }
}
