<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->integer('material_id')->unsigned();
          $table->integer('land_id')->unsigned();
          $table->integer('supplier_id')->unsigned();
          $table->integer('quantity');
          $table->integer('single_cost');
          $table->integer('total_cost');
          $table->string('notes');
          $table->timestamps();
        });
        Schema::table('purchases', function (Blueprint $table) {
          $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
          $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
          $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
