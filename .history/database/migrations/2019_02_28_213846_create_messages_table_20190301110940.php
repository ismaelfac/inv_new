<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('message_type',['warning', 'success','info','danger'])->default('success');
            $table->unsignedInteger('rol_id_receiver');//Verifico el tipo de rol - Panel acepta multi-roles.
            $table->foreign('rol_id_receiver')->references('id')->on('role_user')->onUpdate('cascade');
            $table->boolean('is_read')->default(false); //Establece si el mensaje fue leido.
            $table->string('title'); //
            $table->mediumText('description',220); //Descripción del mensaje lanzado por el sistema o por roles administradores.
            $table->string('img_message')->default('../img');
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
        Schema::dropIfExists('messages');
    }
}
