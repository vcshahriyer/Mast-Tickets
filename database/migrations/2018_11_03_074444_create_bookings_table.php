<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id')->unsigned();
            $table->date('dept_date');
            $table->string('my_seats');
            $table->string('booked_seats');
            $table->string('pay_status');
            $table->string('cs_name');
            $table->string('cs_mobile');
	        $table->string('cs_email')->unique();
	        $table->string('cs_pass');
	        $table->timestamps();
	        $table->foreign('bus_id')->references('id')->on('buses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
