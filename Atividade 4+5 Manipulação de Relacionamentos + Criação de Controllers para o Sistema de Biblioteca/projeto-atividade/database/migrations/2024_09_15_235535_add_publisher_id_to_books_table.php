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
        Schema::table('books', function (Blueprint $table) {
            // Adiciona a coluna publisher_id e define como chave estrangeira
            $table->foreignId('publisher_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Remove a coluna publisher_id
            $table->dropForeign(['publisher_id']);
            $table->dropColumn('publisher_id');
        });
    }
};

