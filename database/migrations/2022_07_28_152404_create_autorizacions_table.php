<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atencion_medica')->nullable();
            $table->string('estado');
            $table->string('observacion');
            $table->string('numero_observacion');


            $table->foreign('id_atencion_medica')->references('id')->on('atencion_medicas')->onDelete('set null');
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
        Schema::dropIfExists('autorizacions');
    }
}
