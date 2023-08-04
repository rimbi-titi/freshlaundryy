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
        'harga_id' => 1,
        'description' => 'lorem ipsum'
        ], 
         [
        'code' => '10 kg',
        'layanan' => 'Cuci Kering',
        'harga_id' => 2,
        'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Cuci Kering',
            'harga_id' => 3,
            'description' => 'lorem ipsum'
        ],
        
        [
        'code' => '5 kg',
        'layanan' => 'Cuci Basah',
        'harga_id' => 4,
        'description' => 'lorem ipsum'
        ],
        [
            'code' => '10 kg',
            'layanan' => 'Cuci Basah',
            'harga_id' => 5,
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Cuci Basah',
            'harga_id' => 6,
            'description' => 'lorem ipsum'
        ],    
        [
            'code' => '5 kg',
            'layanan' => 'Cuci Setrika',
            'harga_id' => 7,
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '10 kg',
            'layanan' => 'Cuci Setrika',
            'harga_id' => 8,
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Cuci Setrika',
            'harga_id' => 9,
            'description' => 'lorem ipsum'
        ],
        [
        'code' => '5 kg',
        'layanan' => 'Setrika',
        'harga_id' => 10,
        'description' => 'lorem ipsum'
        ],
        [
            'code' => '10 kg',
            'layanan' => 'Setrika',
            'harga_id' => 11,
            'description' => 'lorem ipsum'
        ],
        [
            'code' => '15 kg',
            'layanan' => 'Setrika',
            'harga_id' => 12,
            'description' => 'lorem ipsum'
            ],
        ]);
    }
}