<?php

namespace Database\Seeders;

use App\Models\districts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/bd-districts.json');

        $data = json_decode($json);

        $districts = collect($data->districts);

        $districts->each(function($item, $key){

            districts::create([
                'division_id' => $item->division_id,
                'en_name' => $item->name,
                'bn_name' => $item->bn_name,
                'lat' => $item->lat,
                'long' => $item->long,
            ]);

        });
    }
}
