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
            $table->unsignedInteger('message_id');//.
            $table->foreign('message_id')->references('id')->on('messages')->onUpdate('cascade');
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
