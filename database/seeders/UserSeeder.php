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
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('12341234'),
        ]);
        User::create([
            'name' => 'rimbi',
            'email' => 'rimbi@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12341234'),
        ]);
        User::create([
            'name' => 'Rahayu',
            'email' => 'rahayu@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('12341234'),
        ]);
    }
}
