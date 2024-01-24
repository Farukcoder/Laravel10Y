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
        Department::create(['name' => 'Computer Science & engineering', 'description' => 'CSE']);
        Department::create(['name' => 'Electrical engineering', 'description' => 'EEE']);
        Department::create(['name' => 'Business organization', 'description' => 'BO']);

    }
}
