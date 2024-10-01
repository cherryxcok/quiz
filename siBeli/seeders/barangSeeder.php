<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_EN')

        for ($i = 1; $i <= 10; $i++){
            DB::table('barangs')->insert([
                'status' => 'Ready'
                'stok' => '24'
                'harga_beli' => '1000000',
                'harga_jual' => '1200000',
                'satuan' => 'set'
                'nama_barang' => $faker->word,
                'kd_barang' => 'camera001'
            ])
        }
    }
}
