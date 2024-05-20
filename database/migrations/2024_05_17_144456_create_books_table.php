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
            $table->string('title', 100);
            $table->string('author', 60);
            $table->string('category', 60);
            $table->string('short_description', 3000);
            $table->integer('price');
            $table->string('img_url', 300);
            $table->string('publisher');
            $table->string('edition');
            $table->boolean('e_book');
            $table->string('publication_time');
            $table->timestamps();
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
