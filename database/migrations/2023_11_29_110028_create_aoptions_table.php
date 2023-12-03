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
        Schema::create('aoptions', function (Blueprint $table) {
            $table->id();
            $table->string('option');
            $table->decimal('price', 8, 2); // Adjust the precision and scale as needed
            $table->string('addon_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aoptions');
    }
};
