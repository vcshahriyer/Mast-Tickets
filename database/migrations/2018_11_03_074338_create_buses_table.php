<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('bus_model');
            $table->string('bus_type');
            $table->string('route_from');
            $table->string('route_to');
            $table->time('dept_time');
            $table->time('arr_time');
            $table->integer('seats');
            $table->integer('fare');
	        $table->foreign('company_id')->references('id')->on('companies');
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
