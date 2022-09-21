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
            $table->increments('id');
            $table->string('customer');
            $table->integer('product_id');
            $table->string('delivery_address');
            $table->integer('quantity_booked');
            $table->foreign('customer')->references('name')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
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
