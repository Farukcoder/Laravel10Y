<?php

namespace Database\Seeders;

use App\Models\division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: ('database/json/bd-divisions.json'));

        $data = json_decode($json);

        // dd($data);

        $divisions = collect($data->divisions);

        // dd($divisions);

        $divisions->each(function($item, $key) {

            division::create([
                'en_name' => $item->name,
                'bn_name' => $item->bn_name,
                'lat' => $item->lat,
                'long' => $item->long,
            ]);
        });
    }
}
