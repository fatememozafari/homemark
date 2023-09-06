<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => 'admin',
            "mobile" => '09180001234',
            "email" => 'admin@gmail.com',
            "password" => Hash::make(123456789),
            "user_type" => 'admin',
        ]);

        User::create([
            "name" => 'staff',
            "mobile" => '09181111234',
            "email" => 'staff@gmail.com',
            "password" => Hash::make(123456789),
            "user_type" => 'staff',
        ]);

        User::create([
            "name" => 'customer',
            "mobile" => '09182221234',
            "email" => 'customer@gmail.com',
            "password" => Hash::make(123456789),
            "user_type" => 'customer',
        ]);
    }
}
