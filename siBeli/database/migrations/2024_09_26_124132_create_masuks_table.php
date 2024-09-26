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
        Schema::create('masuks', function (Blueprint $table) {
            $table->id();
            $table->string('kd_masuk',length: 10) ->primary();
            $table->string('tgl_masuk',length: 15);
            $table->string('kd_admin',length: 20) ->foreign();
            $table->integer('kd_supplier',length: 20) ->foreign();
            $table->char('total masuk',length: 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masuks');
    }
};
