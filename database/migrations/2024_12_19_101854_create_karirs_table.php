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
        Schema::create('karirs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type',['Fresh Graduate','Berpengalaman']);
            $table->text('tentang_pekerjaan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->integer('batas_usia');
            $table->integer('kuota');
            $table->integer('available');
            $table->text('persyaratan');
            $table->string('lokasi_test');
            $table->text('informasi_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karirs');
    }
};
