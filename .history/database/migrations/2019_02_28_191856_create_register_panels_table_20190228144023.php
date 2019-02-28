<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_panels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('property_type_id');//Identificador que indica el tipo de propiedad.
            $table->foreign('property_type_id')->references('id')->on('type_properties')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('register_panels');
    }
}
