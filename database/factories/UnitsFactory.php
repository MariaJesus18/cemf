<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UnitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' => "kaka",
                // 'responsible_id',
                'cnpj' => "kaka",
                'observation' => "kaka",
                'cpf' => "kaka",  
                'telephone1' => "kaka",  
                'telephone2' => "kaka",  
                'road' => "kaka",  
                'number' => "kaka",  
                'neighborhood' => "kaka",  
                'complement' => "kaka",  
                'city' => "kaka",  
                'state' => "kaka",
            ];
    }
}
