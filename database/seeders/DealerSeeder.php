<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            Dealer::create([
                'brand_id' => "$i",
                'name' => "Dealer name $i",
                'description' => "Dealer Description $i",
                'location' => "Location $i",
            ]);
        }
    }
}
