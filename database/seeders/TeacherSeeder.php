<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => "Md Omar Faruk",
            'department_id' => 5,
            'address' => "DHK"
        ]);
        Teacher::create([
            'name' => "Md Nasir Uddin",
            'department_id' => 6,
            'address' => "CTG"
        ]);
        Teacher::create([
            'name' => "Md Talha",
            'department_id' => 7,
            'address' => "CUM"
        ]);
    }
}
