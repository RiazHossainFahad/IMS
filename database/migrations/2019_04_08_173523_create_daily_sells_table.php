<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailySellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_sells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sells_point_name');
            $table->string('product_name');
            $table->integer('quantity');
            $table->double('rate');
            $table->string('customer_name');
            $table->double('amount_paid');
            $table->double('amount_left');
            $table->double('total_amount');
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
        Schema::dropIfExists('daily_sells');
    }
}
