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
            $table->unsignedInteger('rol_id');//Verifico el tipo de rol - Panel acepta multi-roles.
            $table->foreign('rol_id')->references('id')->on('role_user')->onUpdate('cascade');
            $table->double('message_count');//.
            $table->double('recommended_properties_count');//.
            $table->double('ads_count');//.
            $table->double('properties_count');//.
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
