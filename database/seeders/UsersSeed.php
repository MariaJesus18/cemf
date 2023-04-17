<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "admin",
            'email' => "admin@admin",
            'password' => Hash::make('123123123'),
            'status' => true,
            'telephone' => "123123123",
        ]);


        User::create([
            'name' => "Gabriel",
            'email' => "gabriel@gabriel",
            'password' => Hash::make('123123123'),
            'status' => false,
            'telephone' => "123123123",
        ]);

        User::create([
            'name' => "Maria de Jesus",
            'email' => "maria@maria",
            'password' => Hash::make('123123123'),
            'status' => true,
            'telephone' => "123123123",
        ]);
    }
}
