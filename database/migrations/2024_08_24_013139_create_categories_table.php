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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Nama kategori, misal: "Teknologi", "Lifestyle"
            $table->string('slug')->unique(); // Slug untuk URL kategori
            $table->text('description')->nullable(); // Deskripsi kategori (opsional)
            $table->string('color', 100); // Nama kategori, misal: "Teknologi", "Lifestyle"
            $table->timestamps();
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
