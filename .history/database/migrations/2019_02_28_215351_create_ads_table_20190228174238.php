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
            $table->foreign('rol_id_transmitter')->references('id')->on('role_user')->onUpdate('cascade');//Emisor del anuncio.
            $table->string('title');//Titulo del anuncio
            $table->mediumText('description',220);//descripcion del anuncio.
            $table->enum('state_ad',['Sin Calificar','Descalificado','Cancelado por Usuario', 'Retirado', 'Activo'])->default('Sin Calificar');
            $table->enum('ad_type',['Buscar','Ofertar','Invertir'])->default('Ofertar'); //Define el tipo de anuncio que el usuario quiere crear.
            $table->mediumText('observations_ad')->nullable();//Observaciones del anuncio
            $table->boolean('is_private')->default(false); //Si el emisor del anuncio quiere que el anuncio solo sea para la empresa.
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
