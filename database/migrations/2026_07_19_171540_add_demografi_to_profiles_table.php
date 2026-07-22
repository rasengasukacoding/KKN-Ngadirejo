<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Menambahkan 4 kolom statistik kependudukan
            $table->integer('jumlah_penduduk')->nullable();
            $table->integer('jumlah_laki')->nullable();
            $table->integer('jumlah_perempuan')->nullable();
            $table->integer('jumlah_kk')->nullable();
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['jumlah_penduduk', 'jumlah_laki', 'jumlah_perempuan', 'jumlah_kk']);
        });
    }
};