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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('pk_id_sales');
            $table->uuid('uuid');
            $table->foreignId('fk_id_katalog')->constrained('katalog', 'pk_id_katalog')->onDelete('cascade');
            $table->integer('harga_normal');
            $table->integer('harga_sales');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
