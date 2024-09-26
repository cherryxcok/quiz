<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_EN');

        for ($i = 1; $i <= 30; $i++) {
            DB::table('suppliers')->insert([
                'kd_supplier' => 'supplier00'.$i,
                'nama_supplier' => $faker->name,
                'alamat' => 'Jl. Universitas no.123'
            ]);
        }
    }
}
