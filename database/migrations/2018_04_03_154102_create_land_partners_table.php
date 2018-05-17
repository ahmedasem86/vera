<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_partners', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('partner_id')->unsigned();
            $table->integer('land_id')->unsigned();
            $table->float('land_percentage');
            $table->float('construction_percentage');
            $table->float('total_percentage');
            $table->timestamps();

        });
        Schema::table('land_partners', function (Blueprint $table) {
          $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
          $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_partners');
    }
}
