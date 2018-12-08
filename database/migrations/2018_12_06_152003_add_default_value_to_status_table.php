<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValueToStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('statuses')) {
            Schema::table('statuses', function (Blueprint $table) {
                $table->date('from')->nullable()->default('2000-11-04')->change();
                $table->date('till')->nullable()->default('2018-11-04')->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('statuses', function (Blueprint $table) {
            $table->date('from')->nullable();
            $table->date('till')->nullable();
        });
    }
}
