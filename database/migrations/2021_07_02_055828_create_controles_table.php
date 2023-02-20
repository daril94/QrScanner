<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id')
                ->references('id')
                ->on('docs')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');
            $table->string('etiqueta');
            $table->string('imagen');
            $table->string('qr');
            $table->date('fecha');
            $table->string('denominacion');
            $table->string('ciudad');
            $table->string('colaborador');
            $table->string('observaciones');
            $table->string('tipoControl');






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
        Schema::dropIfExists('controles');
    }
}
