<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmMarketPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farm_market', function (Blueprint $table) {
            $table->integer('market_id')->unsigned()->index();
            $table->foreign('market_id')->references('id')->on('markets')->onDelete('cascade');

            $table->integer('farm_id')->unsigned()->index();
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
            
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
        Schema::dropIfExists('farm_market');
    }
}
