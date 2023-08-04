<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PesananSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        DB::table('pesanans')->insert([
        [
            'nama' => 'Purnama',
            'telepon' => '5481783',
            'layanan_id' => 1,
            'user_id' => 1,
            'status' => 0,
            'alamat' => 'jl jl jl',
            
        ],
        [
            'nama' => 'Purnama',
            'telepon' => '654367890',
            'layanan_id' => 1,
            'user_id' => 2,
            'status' => 0,
            'alamat'=> 'jl jl jl',
            
        ],
        [
            'nama' => 'Purnama',
            'telepon' => '3468790',
            'layanan_id' => 1,
            'user_id' => 1,
            'status' => 1,
            'alamat'=> 'jl jl jl',
            
        ],
        ]);
    }
}