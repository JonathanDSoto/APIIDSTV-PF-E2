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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->unsignedBigInteger('user_final');
            $table->unsignedBigInteger('address');
            $table->string('phone_number', 40);
        
            $table->foreign('user_final')->references('id')->on('user_final');
            $table->foreign('address')->references('id')->on('address');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
