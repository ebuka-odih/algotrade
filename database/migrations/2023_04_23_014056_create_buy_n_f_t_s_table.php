<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyNFTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_n_f_t_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('list_n_f_t_id');
            $table->bigInteger('user_id');
            $table->integer('status')->default(0);
            $table->string('trans_hash')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_n_f_t_s');
    }
}
