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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_lamar');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('karir_id');
            $table->foreign('karir_id')->references('id')->on('karirs')->onDelete('cascade');
            $table->unsignedBigInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
            $table->string('cv');
            $table->string('pas_foto');
            $table->string('lamaran');
            $table->decimal('ipk', 3, 2);
            $table->enum('pendidikan_terakhir',['SMA/SMK','S1','S2','S3']);
            $table->string('universitas');
            $table->date('tanggal_lamar');
            $table->enum('status', ['diterima','ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};