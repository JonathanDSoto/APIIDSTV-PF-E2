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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->float('price');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('maker')->nullable();
            $table->unsignedBigInteger('coupon')->nullable();
            $table->string('description', 200);
            $table->string('image', 100);
            $table->timestamps();

            $table->foreign('category')->references('id')->on('category');
            $table->foreign('maker')->references('id')->on('maker')->nullable();
            $table->foreign('coupon')->references('id')->on('coupon')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
