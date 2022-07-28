<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_familias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_familia');
            $table->string('apellidos_familia');
            $table->unsignedBigInteger('id_historia_clinica');
            $table->unsignedBigInteger('id_parentesco');
            $table->unsignedBigInteger('id_tipo_documento');


            $table->foreign('id_tipo_documento')->references('id')->on('tipo_documentos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_parentesco')->references('id')->on('parentescos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_historia_clinica')->references('id')->on('historia_clinicas')->onUpdate('cascade')->onDelete('cascade');
           
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
        Schema::dropIfExists('detalle_familias');
    }
}
