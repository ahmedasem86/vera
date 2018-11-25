<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('floor_no');
            $table->integer('flat_no');
            $table->integer('client_id')->unsigned()->default(1);
            $table->integer('land_id')->unsigned();
            $table->float('area');
            $table->bigInteger('price');
            $table->integer('unit_type');
            $table->integer('status')->default(0);
            $table->integer('selling_method')->default(0);
            $table->string('description');
            $table->timestamps();
        });
        Schema::table('units', function (Blueprint $table) {
          $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
          $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
