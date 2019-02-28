<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rol_id_receiver');//Verifico el tipo de rol - Panel acepta multi-roles.
            $table->foreign('rol_id_receiver')->references('id')->on('role_user')->onUpdate('cascade');//Emisor del anuncio.
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
        Schema::dropIfExists('ad_favorites');
    }
}
