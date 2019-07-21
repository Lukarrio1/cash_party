<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make');
            $table->string('year');
            $table->string('model');
            $table->string('cc_rating');
            $table->string('num_seats');
            $table->string('driver_side');
            $table->string("body_style");
            $table->string('transmission');
            $table->string("condition");
            $table->string('location');
            $table->string('color');
            $table->float('price');
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
        Schema::dropIfExists('sales');
    }
}
