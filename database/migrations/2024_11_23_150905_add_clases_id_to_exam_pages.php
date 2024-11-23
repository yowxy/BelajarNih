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
            //
            $table->foreignId('clases_id')->nullable()->constrained()->cascadeOnDelete();  // Add user_id column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_pages', function (Blueprint $table) {
            //
            $table->dropForeign(['clases_id']);
            $table->dropColumn('clases_id');
        });
    }
};