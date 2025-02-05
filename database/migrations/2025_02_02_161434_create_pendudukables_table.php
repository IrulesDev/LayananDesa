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
        Schema::create('pendudukables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');
            $table->foreignId('pendudukable_id')->nullable();
            $table->string('layanan_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendudukables');
    }
};
