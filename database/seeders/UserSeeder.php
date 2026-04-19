<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'User 1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
