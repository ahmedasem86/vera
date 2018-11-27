<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpurchases', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->integer('material_id')->unsigned();
          $table->integer('client_id')->unsigned();
          $table->integer('supplier_id')->unsigned();
          $table->integer('quantity');
          $table->integer('single_cost');
          $table->integer('total_cost');
          $table->string('notes');
          $table->timestamps();
        });
        Schema::table('cpurchases', function (Blueprint $table) {
          $table->foreign('material_id')->references('id')->on('cmaterials')->onDelete('cascade');
          $table->foreign('client_id')->references('id')->on('cclients')->onDelete('cascade');
          $table->foreign('supplier_id')->references('id')->on('csuppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpurchases');
    }
}
