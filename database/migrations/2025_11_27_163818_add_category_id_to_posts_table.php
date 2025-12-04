<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Foreign key ke tabel categories
            $table->foreignId('category_id')
                  ->nullable() 
                  ->constrained() // Asumsi nama tabel categories
                  ->onDelete('set null') // Perilaku saat kategori dihapus
                  ->after('id'); 
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
