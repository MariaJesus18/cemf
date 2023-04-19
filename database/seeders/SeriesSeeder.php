<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Serie;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::create([
            'name' => "1° ano",
        ]);
        Serie::create([
            'name' => "2° ano",
        ]);
        Serie::create([
            'name' => "3° ano",
        ]);
        Serie::create([
            'name' => "4° ano",
        ]);
        Serie::create([
            'name' => "5° ano",
        ]);
        Serie::create([
            'name' => "6° ano",
        ]);
        Serie::create([
            'name' => "7° ano",
        ]);
        Serie::create([
            'name' => "8° ano",
        ]);
        Serie::create([
            'name' => "9° ano",
        ]);
    
    }
}
