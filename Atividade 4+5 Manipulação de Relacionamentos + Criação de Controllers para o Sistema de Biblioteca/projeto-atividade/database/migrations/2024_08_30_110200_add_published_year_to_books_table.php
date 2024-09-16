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
        Schema::table('books', function (Blueprint $table) {
            // Verifica se a coluna "published_year" já existe antes de adicionar
            if (!Schema::hasColumn('books', 'published_year')) {
                $table->integer('published_year')->nullable(); // published_year: tipo integer, pode ser nulo
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            // Verifica se a coluna "published_year" existe para removê-la
            if (Schema::hasColumn('books', 'published_year')) {
                $table->dropColumn('published_year');
            }
        });
    }
};

