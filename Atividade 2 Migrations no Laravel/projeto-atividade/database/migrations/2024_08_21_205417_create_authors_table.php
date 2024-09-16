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
    Schema::create('authors', function (Blueprint $table) {
        $table->id(); // id: chave primária, inteiro, auto-incremento
        $table->string('name'); // name: tipo string
        $table->date('birth_date')->nullable(); // birth_date: tipo date, pode ser nulo
        $table->timestamps(); // created_at e updated_at: timestamps automáticos
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};

#public function up(): void
#{
#    Schema::create('authors', function (Blueprint $table) {
#        $table->id();
#        $table->timestamps();
#    });
#}