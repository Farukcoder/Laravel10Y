<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\client;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Client::factory()->count(10)->create();
        Employee::factory()->count(10)->create();
        $this->call([
            StudentSeeder::class,
            DivisionSeeder::class,
            DistrictsSeeder::class,
            UpazilasSeeder::class,
            TodonewSeeder::class,
            EmployeeSeeder::class,
            BrandSeeder::class,
            DealerSeeder::class,
            DepartmentSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
