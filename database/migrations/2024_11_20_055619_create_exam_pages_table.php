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
        Schema::create('exam_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // User yang mengikuti ujian
            $table->foreignId('class_id')->constrained()->cascadeOnDelete(); // Kelas terkait
            $table->string('title'); // Judul soal
            $table->text('question_text'); // Isi soal  
            $table->string('correct_answer'); // Jawaban benar
            $table->string('user_answer')->nullable(); // Jawaban user
            $table->boolean('is_correct')->default(false); // Status benar/salah
            $table->integer('score')->nullable(); // Skor untuk soal ini
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_pages');
    }
};
