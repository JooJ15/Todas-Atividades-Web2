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
    Schema::create('categories', function (Blueprint $table) {
        $table->id(); // id: chave primária, inteiro, auto-incremento
        $table->string('name')->unique(); // name: tipo string, deve ser único
        $table->timestamps(); // created_at e updated_at: timestamps automáticos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

#public function up(): void
#{
#    Schema::create('categories', function (Blueprint $table) {
#        $table->id();
#        $table->timestamps();
#    });
#}