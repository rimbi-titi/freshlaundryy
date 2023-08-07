<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Status::create([
            'code' => 'PCS',
            'status' => 'Proses',
        ]);
        Status::create([
            'code' => 'KRM',
            'status' => 'Dikirim',
        ]);
        Status::create([
            'code' => 'SLS',
            'status' => 'Selesai',
        ]);
    }
}
