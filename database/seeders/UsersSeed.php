<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Administrator;
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
        $admin = User::create([
            'name' => "admin",
            'email' => "admin@admin",
            'password' => Hash::make('123123123'),
            'status' => true,
            'type' => 1,
            'telephone' => "123123123",
        ]);
        Administrator::create([
            'user_id' => $admin->id,
        ]);



        User::create([
            'name' => "Lucas",
            'email' => "lucas@lucas",
            'password' => Hash::make('123123123'),
            'status' => true,
            'type' => 0,
            'telephone' => "123123123",
        ]);

        User::create([
            'name' => "Gabriel",
            'email' => "gabriel@gabriel",
            'password' => Hash::make('123123123'),
            'status' => false,
            'type' => 2,
            'telephone' => "123123123",
        ]);




        $maria = User::create([
            'name' => "Maria de Jesus",
            'email' => "maria@maria",
            'password' => Hash::make('123123123'),
            'status' => true,
            'type' => 1,
            'telephone' => "123123123",
        ]);
        Administrator::create([
            'user_id' => $maria->id,
        ]);
    }
}
