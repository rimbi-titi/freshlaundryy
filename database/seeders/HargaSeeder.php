<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('harga')->insert([
            [
            'id' => 1,
            'berat_maksimal' => 0,
            'harga' => 0
            ],
            [
            'id' => 1,
            'berat_maksimal' => 5,
            'harga' => 20000
            ],
            [
                'id' => 1,
                'berat_maksimal' => 10,
                'harga' => 40000
                ],
            [
                'id' => '1',
                'berat_maksimal' => 15,
                'harga' => 60000
            ],
            [
                'id' => 2,
                'berat_maksimal' => 0,
                'harga' => 0
                ],
                [
                'id' => 2,
                'berat_maksimal' => 5,
                'harga' => 15000
                ],
                [
                    'id' => 2,
                    'berat_maksimal' => 10,
                    'harga' => 30000
                    ],
                [
                    'id' => 2,
                    'berat_maksimal' => 15,
                    'harga' => 45000
                ],
                [
                    'id' => 3,
                    'berat_maksimal' => 0,
                    'harga' => 0
                    ],
                [
                    'id' => 3,
                    'berat_maksimal' => 5,
                    'harga' => 25000
                ],
                    [
                        'id' => 3,
                        'berat_maksimal' => 10,
                        'harga' => 50000
                        ],
                    [
                        'id' => 3,
                        'berat_maksimal' => 15,
                        'harga' => 75000
                    ],
                    [
                        'id' => 4,
                        'berat_maksimal' => 0,
                        'harga' => 0
                        ],
                        [
                        'id' => 4,
                        'berat_maksimal' => 5,
                        'harga' => 20000
                        ],
                        [
                            'id' => 4,
                            'berat_maksimal' => 10,
                            'harga' => 40000
                            ],
                        [
                            'id' => 4,
                            'berat_maksimal' => 15,
                            'harga' => 60000
                        ],
            ]);
        }
        //
    }
    

