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
        Schema::create('bukus', function (Blueprint $table) {
            $table->integer('id_buku');
            $table->string('judul',100);
            $table->string('penulis',100);
            $table->string('penerbit',100);
            $table->year('tahun_terbit');
            $table->integer('stok');
            $table->integer('harga_pokok');
            $table->integer('harga_jual');
            $table->integer('diskon');
            $table->timestamps();
            $table->primary('id_buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('bukus');
    }
};
