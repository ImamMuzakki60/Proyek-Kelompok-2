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
        Schema::create('kata', function (Blueprint $table) {
            $table->id();
            $table->string('kata');
            $table->longText('definisi');
            $table->longText('definisi_contoh')->nullable();
            $table->enum('kategori', ['istilah_regional', 'budaya_internet', 'teknologi_gadget', 'akronim']);
            $table->integer('like');
            $table->integer('dislike');
            $table->foreignId('user_id')->constrained(
                table: 'user'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kata');
    }
};
