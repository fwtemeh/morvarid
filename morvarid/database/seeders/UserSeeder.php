<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'reza',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'username' => 'ali',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'username' => 'mmd',
            'password' => bcrypt('1234567')
        ]);
    }
}
