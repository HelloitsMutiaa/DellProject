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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('kode_buku');
            $table->string('bahasa');
            $table->string('edisi')->nullable();
            $table->string('cover')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->date('tahun_terbit');
            $table->char('isbn')->nullable();
            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('categories')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
