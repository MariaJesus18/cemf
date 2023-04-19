<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'title' => "pix",
        ]);
        PaymentMethod::create([
            'title' => "boleto",
        ]);
        PaymentMethod::create([
            'title' => "cartão",
        ]);
    }
}
