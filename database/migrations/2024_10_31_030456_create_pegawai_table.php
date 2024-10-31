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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_pegawai');
            $table->date('tanggal_lahir_pegawai');
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat_pegawai');
            $table->foreignId('pendidikan_id')->nullable()
                ->constrained('pendidikan')
                ->onDelete('cascade');
            $table->foreignId('jabatan_id')->nullable()
                ->constrained('jabatan')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
