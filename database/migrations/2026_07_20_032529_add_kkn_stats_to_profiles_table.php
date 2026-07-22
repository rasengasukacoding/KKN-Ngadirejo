<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Menambahkan 4 laci baru untuk statistik KKN
            $table->string('kkn_buku')->nullable();
            $table->string('kkn_peserta')->nullable();
            $table->string('kkn_program')->nullable();
            $table->string('kkn_hari')->nullable();
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['kkn_buku', 'kkn_peserta', 'kkn_program', 'kkn_hari']);
        });
    }
};