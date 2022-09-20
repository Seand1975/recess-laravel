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
        Schema::create('product_ooking', function (Blueprint $table) {
            $table->foreignId('product_id');
            $table->foreignId('customer_id');
            $table->increments('id');
            $table->string('delivery_address');
            $table->integer('quantity_booked');
            $table->string('delivery_address');
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
