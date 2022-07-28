<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtencionMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencion_medicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_historia_clinica')->nullable();
            $table->string('fecha_atencion');
            $table->string('hora_atencion');
            $table->string('sintomas_paciente');
            $table->string('diagnostico_paciente');
            $table->string('tratamiento');
            $table->string('recomendacion_medica');
            $table->string('requiere_autorizacion');
            $table->string('numero_autorizacion');


            $table->foreign('id_historia_clinica')->references('id')->on('historia_clinicas')->onDelete('set null');
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
        Schema::dropIfExists('atencion_medicas');
    }
}
