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
        Schema::create('pemeriksaan_umums', function (Blueprint $table) {
            $table->id();
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('kesegarran_jasmani');
            $table->string('tekanan_darah_sistolik');
            $table->string('tekanan_darah_diastolik');
            $table->string('berat_badan');
            $table->string('nadi');
            $table->string('suhu');
            $table->string('mata');
            $table->string('telinga');
            $table->string('hidung');
            $table->string('tenggorokan');
            $table->string('jantung');
            $table->string('paru_paru');
            $table->string('ginjal');
            $table->string('sandi');
            $table->string('otot');
            $table->string('syaraf_motorik');
            $table->string('syaraf_sensorik');
            $table->string('gigi');
            $table->string('riwayat_penyakit');
            $table->string('kulit');
            $table->string('radiologi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_umums');
    }
};
