<?php

namespace Database\Seeders;

use App\Models\upazilas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UpazilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/bd-upazilas.json');

        $data = json_decode($json);

        $upazilas = collect($data->upazilas);

        $upazilas->each(function($item, $key) {
            upazilas::create([
                'district_id' => $item->district_id,
                'en_name' => $item->name,
                'bn_name' => $item->bn_name
            ]);
        });
    }
}
