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
        Schema::create('katalog', function (Blueprint $table) {
            $table->id('pk_id_katalog');
            $table->uuid('uuid');
            $table->string('nama_katalog');
            $table->foreignId('fk_id_brand')->constrained('brand', 'pk_id_brand')->onDelete('cascade');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->text('gambar');
            $table->string('link');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog');
    }
};
