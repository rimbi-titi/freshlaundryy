<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Order::create([
            'nama' => 'Siti Aisyah',
            'telepon' => '085678912345',
            'service_id' => 4,
            'alamat' => 'Jl. Diponegoro No. 15, Surabaya',
            'bobot' => 12,
            'status_id' => 1,
            'user_id' => 2,
        ]);

        Order::create([
            'nama' => 'Ahmad Ibrahim',
            'telepon' => '083212345678',
            'service_id' => 1,
            'alamat' => 'Jl. Raya Darmo Permai III, Surabaya',
            'bobot' => 9,
            'status_id' => 2,
            'user_id' => 3,
        ]);

        Order::create([
            'nama' => 'Andi Wijaya',
            'telepon' => '081234567890',
            'service_id' => 1,
            'alamat' => 'Jl. HR. Muhammad No. 11, Sidoarjo',
            'bobot' => 14,
            'status_id' => 1,
            'user_id' => 2,
        ]);

        Order::create([
            'nama' => 'Lina Sari',
            'telepon' => '081298765432',
            'service_id' => 2,
            'alamat' => 'Jl. Raya Jemursari No. 8, Surabaya',
            'bobot' => 7,
            'status_id' => 2,
            'user_id' => 2,
        ]);

        Order::create([
            'nama' => 'Rudi Santoso',
            'telepon' => '082134567890',
            'service_id' => 3,
            'alamat' => 'Jl. Ahmad Yani No. 75, Gresik',
            'bobot' => 3,
            'status_id' => 3,
            'user_id' => 3,
        ]);

        //Factory
        Order::factory()->count(45)->create();
    }
}
