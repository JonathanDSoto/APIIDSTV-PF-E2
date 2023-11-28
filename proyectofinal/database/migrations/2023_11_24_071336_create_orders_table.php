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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status', 50);
            $table->date('creation_date');
            $table->date('last_change');
            $table->unsignedBigInteger('order_detail');
            $table->float('sub_total');
            $table->float('total');
            $table->unsignedBigInteger('client');
            $table->unsignedBigInteger('coupon')->nullable();

            $table->foreign('order_detail')->references('id')->on('order_detail');
            $table->foreign('client')->references('id')->on('client');
            $table->foreign('coupon')->references('id')->on('coupon')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
