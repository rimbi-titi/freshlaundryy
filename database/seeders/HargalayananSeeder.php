<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HargalayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hargalayanan')->insert([
            [
            'id' => '1',
            'berat_maksimal' => '0',
            'harga' => '0'
            ],
            [
            'id' => '1',
            'berat_maksimal' => '5 kg',
            'harga' => '20000'
            ],
            [
                'id' => '1',
                'berat_maksimal' => '10 kg',
                'harga' => '40000'
                ],
            [
                'id' => '1',
                'berat_maksimal' => '15 kg',
                'harga' => '60000'
            ],
            [
                'id' => '2',
                'berat_maksimal' => '0',
                'harga' => '0'
                ],
                [
                'id' => '2',
                'berat_maksimal' => '5 kg',
                'harga' => '15000'
                ],
                [
                    'id' => '2',
                    'berat_maksimal' => '10 kg',
                    'harga' => '30000'
                    ],
                [
                    'id' => '2',
                    'berat_maksimal' => '15 kg',
                    'harga' => '45000'
                ],
                [
                    'id' => '3',
                    'berat_maksimal' => '0',
                    'harga' => '0'
                    ],
                [
                    'id' => '3',
                    'berat_maksimal' => '5 kg',
                    'harga' => '25000'
                ],
                    [
                        'id' => '3',
                        'berat_maksimal' => '10 kg',
                        'harga' => '50000'
                        ],
                    [
                        'id' => '3',
                        'berat_maksimal' => '15 kg',
                        'harga' => '75000'
                    ],
                    [
                        'id' => '4',
                        'berat_maksimal' => '0',
                        'harga' => '0'
                        ],
                        [
                        'id' => '4',
                        'berat_maksimal' => '5 kg',
                        'harga' => '20000'
                        ],
                        [
                            'id' => '4',
                            'berat_maksimal' => '10 kg',
                            'harga' => '40000'
                            ],
                        [
                            'id' => '4',
                            'berat_maksimal' => '15 kg',
                            'harga' => '60000'
                        ],
            ]);
        }
        //
    }

