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
            $table->id();
            $table->integer('category_id');
            $table->string('title');
            $table->string('author');
            $table->string('isbn');
            $table->string('cover');
            $table->string('description');
            $table->string('publisher');
            $table->string('language');
            $table->integer('edition');
            $table->integer('subject');
            $table->integer('classification');
            $table->integer('cp_or');
            $table->integer('year');
            $table->integer('quantity');
            $table->integer('available');
            $table->integer('borrowed');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
