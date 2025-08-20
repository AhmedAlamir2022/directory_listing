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
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'), // أو bcrypt('secret123') // password
                'user_type' => 'admin'
            ],
            [
                'name' => 'Ahmed Alamir',
                'email' => 'ahmed@gmail.com',
                'password' => Hash::make('ahmed'), // password
                'user_type' => 'user'
            ]
        ]);
    }
}