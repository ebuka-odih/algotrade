<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->bigInteger('trading_pair_id');
            $table->string('type'); //1 crypto, 2 stock, 3 forex

            $table->string('trade_type'); // buy or sell
            $table->double('price')->nullable();
            $table->double('size')->nullable();
            $table->string('sl')->nullable();
            $table->string('tp')->nullable();
            $table->string('leverage')->nullable();
            $table->integer('execution_time')->nullable();

            $table->integer('percent')->nullable();
            $table->integer('status')->nullable();
            $table->double('profit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trading_rooms');
    }
}
