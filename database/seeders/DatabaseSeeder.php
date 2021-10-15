<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Kenny Perulu',
            'email' => 'kenny@gmail.com',
            'password' => '$2y$10$2xMLOZbu/CiXuM1URUseoeEstaH3272UdMpZfHNyEzqfzB3pczbMq',
            'role_id' => '1',
            'active' => '1',
        ]);

        User::create([
            'name' => 'Feldi Amalo',
            'email' => 'feldi@gmail.com',
            'password' => '$2y$10$2xMLOZbu/CiXuM1URUseoeEstaH3272UdMpZfHNyEzqfzB3pczbMq',
            'role_id' => '2',
            'active' => '1',
        ]);

        User::create([
            'name' => 'Sinyo Dai',
            'email' => 'sinyo@gmail.com',
            'password' => '$2y$10$2xMLOZbu/CiXuM1URUseoeEstaH3272UdMpZfHNyEzqfzB3pczbMq',
            'role_id' => '1',
            'active' => '0',
        ]);
    }
}
