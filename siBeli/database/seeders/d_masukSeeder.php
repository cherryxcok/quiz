<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class d_masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            DB::table('d_masuks')->insert([
                'id_masuk' => 'Ready'
                'kd_masuk' => 24,
                'kd_barang beli' => '1000000'
                'harga_jual' => '1200000'
                'jumlah' => 'set'
                'subtotal' => ,
    }
}
