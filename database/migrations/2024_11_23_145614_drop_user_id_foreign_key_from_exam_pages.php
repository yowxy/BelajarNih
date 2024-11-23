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
            $table->dropForeign(['user_id']);  // Drop the foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_pages', function (Blueprint $table) {
            //
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();  // Add foreign key constraint back
        });
    }
};
