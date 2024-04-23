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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->unsignedBigInteger('id_kelompok');
            $table->string('nama');
            $table->unsignedBigInteger('id_prodi');
            $table->string('angkatan', 4);
            $table->string('golongan', 15);
            $table->timestamps();

            $table->foreign('id_kelompok')
                ->references('id')
                ->on('kelompoks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
