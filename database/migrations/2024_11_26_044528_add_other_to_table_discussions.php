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
        Schema::table('discussions', function (Blueprint $table) {
            $table->string('image_url')->nullable(); // URL untuk gambar (opsional)
            $table->boolean('is_solved')->default('not solved'); // Status solved (default: false)
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discussions', function (Blueprint $table) {
            $table->dropColumn(
                [
                    'image_url', 'is_solved'
                ]
            );
        });
    }
};
