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
        Schema::create('pasoks', function (Blueprint $table) {
            $table->integer('id_pasok');
            $table->integer('id_distributor');
            $table->date('tanggal');
            $table->timestamps();
            $table->primary('id_pasok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pasoks');
    }
};
