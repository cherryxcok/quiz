<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_masuks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_masuk',length: 8) ->primary();
            $table->string('kd_masuk',length: 10) ->unique();
            $table->string('kd_barang_beli',length: 10) ->foreign();
            $table->integer('jumlah',length: 8);
            $table->char('subtotal',length: 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_masuks');
    }
};
