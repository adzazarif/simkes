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
        Schema::create('analisa_lemaks', function (Blueprint $table) {
            $table->id();
            $table->string('hdl_kolestrol');
            $table->string('ldl_kolestrol');
            $table->string('trigliserida');
            $table->string('total_cholestrol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisa_lemaks');
    }
};
