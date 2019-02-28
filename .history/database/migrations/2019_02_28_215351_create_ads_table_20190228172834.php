<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rol_id_transmitter');//Verifico el tipo de rol - Panel acepta multi-roles.
            $table->foreign('rol_id_transmitter')->references('id')->on('role_user')->onUpdate('cascade');
            $table->string('title');//Titulo del anuncio
            $table->mediumText('description',220);//descripcion del anuncio.
            $table->enum('state_ad',['Sin Calificar','Descalificado','Cancelado por Usuario', 'Retirado', 'Activo'])->default('Sin Calificar');
            $table->mediumText('observations_ad')->nullable();//Onservaciones del anuncio
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
        Schema::dropIfExists('ads');
    }
}
