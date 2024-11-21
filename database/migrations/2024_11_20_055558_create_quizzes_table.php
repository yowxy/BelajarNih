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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clases_id')->constrained()->cascadeOnDelete(); // Relasi ke kelas
            $table->string('title'); // Nama quiz
            $table->text('description')->nullable(); // Deskripsi quiz
            $table->integer('total_questions'); // Jumlah soal dalam quiz
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
