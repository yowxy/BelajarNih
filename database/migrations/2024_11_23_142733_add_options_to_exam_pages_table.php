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
        Schema::table('exam_pages', function (Blueprint $table) {
            $table->string('option_a')->nullable();  // Opsi A
            $table->string('option_b')->nullable();  // Opsi B
            $table->string('option_c')->nullable();  // Opsi C
            $table->string('option_d')->nullable();  // Opsi D
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_pages', function (Blueprint $table) {
            $table->dropColumn(['option_a', 'option_b', 'option_c', 'option_d']);
        });
    }
};
