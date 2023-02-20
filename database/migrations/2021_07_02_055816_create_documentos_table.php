<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->integer('pedido')->unique();
            $table->integer('numerodoc')->unique();
            $table->string('asignadoa',50);
            $table->string('aprobadopor');
            $table->string('ciudad');
            $table->string('herramienta');
            $table->string('tipo');
            $table->string('bodega',20);
            $table->string('articulo',50);
            $table->string('etiqueta',50);
            $table->string('descripcion',50);
            $table->string('ubicacion',50);
            $table->string('modelo',50);
            $table->date('fecha');
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
        Schema::dropIfExists('documentos');
    }
}
