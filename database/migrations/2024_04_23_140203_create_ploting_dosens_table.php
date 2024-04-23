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
        Schema::create('ploting_dosens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dosen');
            $table->string('kota');
            $table->string('tahun', 4);
            $table->boolean('status')->comment('masih digunakan atau tidak')->default(true);
            $table->integer('jumlah_kelompok')->comment('jumlah kelompok yang dapat diterima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ploting_dosens');
    }
};
