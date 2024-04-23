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
        Schema::create('alur_magangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelompok');
            $table->string('proposal')->comment('untuk upload path file proposal')->nullable();
            $table->unsignedBigInteger('id_tempat_magang');
            $table->string('surat_balasan')->comment('path file surat balasan dari kantor')->nullable();
            $table->boolean('status')->comment('acc/tidak dari kantor')->nullable();
            $table->timestamps();

            $table->foreign('id_kelompok')
                ->references('id')
                ->on('kelompoks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_tempat_magang')
                ->on('tempat_magangs')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alur_magangs');
    }
};
