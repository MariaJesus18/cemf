<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shift::create([
            'name' => "Manhã",
        ]);
        Shift::create([
            'name' => "Tarde",
        ]);
        Shift::create([
            'name' => "Noite",
        ]);
    }
}
