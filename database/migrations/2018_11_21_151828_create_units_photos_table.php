<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('units');
            $table->string('filename');
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
        Schema::dropIfExists('units_photos');
    }
}
