<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LayananSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        DB::table('layanans')->insert([
        [
        'code' => '5 kg',
        'layanan' => 'Cuci Kering',
        'description' => 'lorem ipsum'
        ], 
         [
        'code' => '10 kg',
        'layanan' => 'Cuci Kering',
        'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Cuci Kering',
            'description' => 'lorem ipsum'
        ],
        
        [
        'code' => '5 kg',
        'layanan' => 'Cuci Basah',
        'description' => 'lorem ipsum'
        ],
        [
            'code' => '10 kg',
            'layanan' => 'Cuci Basah',
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Cuci Basah',
            'description' => 'lorem ipsum'
        ],    
        [
            'code' => '5 kg',
            'layanan' => 'Cuci Setrika',
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '10 kg',
            'layanan' => 'Cuci Setrika',
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Cuci Setrika',
            'description' => 'lorem ipsum'
        ],
        [
        'code' => '5 kg',
        'layanan' => 'Setrika',
        'description' => 'lorem ipsum'
        ],
        [
            'code' => '10 kg',
            'layanan' => 'Setrika',
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Setrika',
            'description' => 'lorem ipsum'
            ],
        ]);
    }
}