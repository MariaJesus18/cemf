<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Period;
use Illuminate\Support\Facades\Hash;

class PeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create([
            'title' => "Anual",
        ]);
        Period::create([
            'title' => "Semestral",
        ]);
        Period::create([
            'title' => "Trimestral",
        ]);
    }
}
