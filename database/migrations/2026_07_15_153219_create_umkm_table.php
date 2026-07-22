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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pemilik')->nullable(); // Laci untuk nama pemilik UMKM
            $table->string('kontak')->nullable();  // Laci untuk nomor WA/HP
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();  // Laci untuk gambar produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};