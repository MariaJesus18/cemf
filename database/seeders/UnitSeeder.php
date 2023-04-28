<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name'=> "maria",
            // 'responsible_id' => 2,
            'cnpj' =>  "1111",
            'observation' => "kaka",
            'cpf' => "1111",  
            'telephone1' => "1111",  
            'telephone2' => "1111",  
            'road' => "1111",  
            'number' => "1111",  
            'neighborhood' => "1111",  
            'complement' => "1111",  
            'city' => "1111",  
            'state' => "1111",
        ]);
    }
}
