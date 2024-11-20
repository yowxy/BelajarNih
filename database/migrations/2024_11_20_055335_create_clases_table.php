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
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul kelas
            $table->text('description'); // Deskripsi kelas
            $table->string('thumbnail'); // Thumbnail untuk kelas
            $table->string('video_url'); // URL video materi
            $table->integer('duration')->nullable(); // Durasi video (menit)
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
