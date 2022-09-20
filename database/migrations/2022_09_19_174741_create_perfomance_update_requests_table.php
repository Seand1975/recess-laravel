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
        Schema::create('perfomance_update_request', function (Blueprint $table){
            $table->increments('id');
            $table->foreignId('user_id');
            $table->dateTime('request_time');
            $table->string('request_answer');
            $table->dateTime('request_response_time');
            $table->dateTime('request_response_seen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfomance_update_requests');
    }
};
