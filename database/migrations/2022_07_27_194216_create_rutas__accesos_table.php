<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas__accesos', function (Blueprint $table) {
            $table->id();
            $table->string('empresa_transporte', 50);
            $table->string('mun_ubicacion', 50);
            $table->time('inicio_atencion');
            $table->time('cierre_atencion');
            $table->string('direccion_empresa', 50);
            $table->string('contacto');
            $table->string('correo_empresa', 50)->nullable();
            $table->string('tipo_ruta', 50);
            $table->string('imagen');
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
        Schema::dropIfExists('rutas__accesos');
    }
};
