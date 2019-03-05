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
            $table->unsignedInteger('roluser_id'); //Verifico el tipo de rol - Panel acepta multi-roles.
            $table->foreign('roluser_id')->references('id')->on('role_user')->onUpdate('cascade');
            $table->double('message_count'); //calcula la cantidad de mensajes del usuario segun su rol.
            $table->double('recommended_properties_count'); //calcula la cantidad de propiedades recomendadas para el usuario segun su rol.
            $table->double('ads_count'); //calcula la cantidad de anuncios del usuario segun su rol.
            $table->double('properties_count'); //calcula la cantidad de propiedades recomendadas según su criterio de busqueda.
            $table->boolean('state')->default(false);
            $table->timestamps();
            $table->softDeletes();
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
