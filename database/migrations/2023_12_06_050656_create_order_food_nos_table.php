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
        Schema::create('order_food_nos', function (Blueprint $table) {
            $table->id();
            $table->integer("table_no");
            $table->integer("quantity");
            $table->string("request")->nullable();
            $table->integer("order_no");
            $table->string('foodid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_food_nos');
    }
};
