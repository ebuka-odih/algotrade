<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');

            $table->integer('payment_type')->nullable();
            $table->string('wallet_name')->nullable();
            $table->string('wallet_address')->nullable();
            $table->string('btc_label')->nullable();

            $table->string('acct_type')->nullable();
            $table->string('acct_name')->nullable();
            $table->string('acct_number')->nullable();
            $table->string('bank_country')->nullable();
            $table->string('base_currency')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('sort_code')->nullable();
            $table->string('routing_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('iban_code')->nullable();
            $table->string('acct_label')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraw_methods');
    }
}
