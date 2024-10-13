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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('barang_id')->references('id')->on('nama_barangs')->onDelete('cascade');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->unsignedBigInteger('status_peminjaman_id');
            $table->foreign('status_peminjaman_id')->references('id')->on('status_peminjamen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
