<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // id: chave primária, inteiro, auto-incremento
            $table->string('title'); // title: tipo string
            $table->unsignedBigInteger('author_id'); // author_id: tipo unsignedBigInteger
            $table->unsignedBigInteger('category_id'); // category_id: tipo unsignedBigInteger
            $table->timestamps(); // created_at e updated_at: timestamps automáticos
    
            // Definir as chaves estrangeiras e as constraints
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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

#public function up(): void
#{
#    Schema::create('books', function (Blueprint $table) {
#        $table->id();
#        $table->timestamps();
#    });
#}