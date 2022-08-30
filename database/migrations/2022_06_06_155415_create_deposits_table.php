<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('trans_type')->nullable(); # 1 = bitcoin 2 = bank transfer
            $table->double('amount');
            $table->double('btc_amount')->nullable();
            $table->integer('status')->default(0);
            $table->string('trans_code')->nullable();
            $table->bigInteger('payment_method_id')->nullable();
            $table->bigInteger('user_id');
            $table->string('deposit_method')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposit');
    }
}
