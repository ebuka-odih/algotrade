<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfitToInvestStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invest_stocks', function (Blueprint $table) {
            $table->double('profit')->default(0);
            $table->double('transferred')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invest_stocks', function (Blueprint $table) {
            $table->dropColumn(['profit', 'transferred']);
        });
    }
}
