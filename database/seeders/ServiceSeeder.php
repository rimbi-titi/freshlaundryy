<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Service::create([
            'code' => 'CK',
            'service' => 'Cuci Kering',
            'price_per_kg' => 4000,
        ]);
        Service::create([
            'code' => 'CB',
            'service' => 'Cuci Basah',
            'price_per_kg' => 3000,
        ]);
        Service::create([
            'code' => 'CS',
            'service' => 'Cuci Setrika',
            'price_per_kg' => 5000,
        ]);
        Service::create([
            'code' => 'S',
            'service' => 'Setrika',
            'price_per_kg' => 4000,
        ]);
    }
}
