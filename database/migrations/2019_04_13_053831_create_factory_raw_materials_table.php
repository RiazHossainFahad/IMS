<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryRawMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_raw_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('factory_name');
            $table->date('assign_date');
            $table->string('materials_name');
            $table->integer('quantity');
            $table->double('price');
            $table->double('total_cost');
            $table->string('production_type');
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
        Schema::dropIfExists('factory_raw_materials');
    }
}
