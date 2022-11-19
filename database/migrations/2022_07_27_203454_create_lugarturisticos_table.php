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
        Schema::create('lugarturisticos', function (Blueprint $table) {
            $table->id();
            $table->string('lugar_turistico');
            $table->string('imagen');
            $table->text('detalles');
            // $table->string('tipo_lugar');
            $table->time('horario_apertura');
            $table->time('horario_cierre');
            $table->string('municipio');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo_electronico');
            $table->string('tipo_lugar');
          

            $table->unsignedBigInteger('restaurante_id')->nullable();
            $table->foreign('restaurante_id')->references('id')->on('restaurantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotels')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('ccomercial_id')->nullable();
            $table->foreign('ccomercial_id')->references('id')->on('ccomercials')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('estacion_id')->nullable();
            $table->foreign('estacion_id')->references('id')->on('estacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('autoridad_id')->nullable();
            $table->foreign('autoridad_id')->references('id')->on('autoridads')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('puntosatencion_id')->nullable();
            $table->foreign('puntosatencion_id')->references('id')->on('puntosatencions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('recomendado_id')->nullable();
            $table->foreign('recomendado_id')->references('id')->on('recomendados')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('rutas__acceso_id')->nullable();
            $table->foreign('rutas__acceso_id')->references('id')->on('rutas__accesos');

            $table->unsignedBigInteger('rutas__turistica_id')->nullable();
            $table->foreign('rutas__turistica_id')->references('id')->on('rutas__turisticas')
            ->onDelete('set null');

            // $table->unsignedBigInteger('clasificacion_id')->nullable();
            // $table->foreign('clasificacion_id')->references('id')->on('clasificacions')
            // ->onDelete('set null');

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
        Schema::dropIfExists('lugarturisticos');
    }
};
