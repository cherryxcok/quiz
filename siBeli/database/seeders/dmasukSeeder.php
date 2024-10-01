<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('suppliers')->insert([
                'id_masuk' => '091829'
                'kd_masuk' => '000190'
                'kd_barang_beli' => '12039'
                'jumlah' => '200'
                'subtotal' => '200'
            ]);
        }
    }
}
