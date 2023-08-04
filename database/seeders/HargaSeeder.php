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
           
            'harga' => 20000
            ],
            [
                
                'harga' => 40000
            ],
            [
                
                'harga' => 60000
            ],
            [
                
                'harga' => 15000
            ],
            [
                
                'harga' => 30000
            ],
            [
                
                'harga' => 45000
            ],
            [
                
                'harga' => 25000
            ],
            [
                
                'harga' => 50000
            ],
            [
                
                'harga' => 75000
            ],
            [
                
                'harga' => 15000
            ],
            [
                
                'harga' => 30000
            ],
            [
                
                'harga' => 45000
                ],
        ]);
        }
        //
    }
    

