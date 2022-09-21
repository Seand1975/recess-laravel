<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->foreignId('name')->constrained('users');
            $table->string('delivery_address');
            $table->integer('quantity_booked');
            $table->string('product_name');
            $table->foreign('product_name')->references('product_name')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_bookings');
    }
};
