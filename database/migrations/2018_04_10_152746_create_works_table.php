<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('land_id')->unsigned();
            $table->integer('contractor_id')->unsigned();
            $table->integer('metres');
            $table->integer('single_cost');
            $table->integer('total_cost');
            $table->string('notes');
            $table->timestamps();
        });
        Schema::table('works', function (Blueprint $table) {
          $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
          $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
          $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
