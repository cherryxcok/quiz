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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('status',length: 20) ->foreign();
            $table->integer('stok',length: 3);
            $table->integer('harga_beli',length: 10); 
            $table->integer('harga_jual',length: 10);
            $table->integer('satuan',length: 10) ->foreign();
            $table->string('nama_barang',length: 20) ->unique();
            $table->string('kd_barang',length: 10) ->primary();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
