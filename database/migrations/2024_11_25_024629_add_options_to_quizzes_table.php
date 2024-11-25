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
        Schema::table('quizzes', function (Blueprint $table) {
            $table->string('option_a')->after('total_questions'); // Opsi A
            $table->string('option_b')->after('option_a'); // Opsi B
            $table->string('option_c')->nullable()->after('option_b'); // Opsi C
            $table->string('option_d')->nullable()->after('option_c'); // Opsi D
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn(
                [
                    'option_a',
                    'option_b',
                    'option_c',
                    'option_d',
                ]
            );
        });
    }
};
