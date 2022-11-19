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
        Schema::create('rutas__turisticas', function (Blueprint $table) {
            $table->id();
            $table->string('ruta_turistica', 50);
            $table->text('descripcion');
            $table->string('municipio_ubicada', 50);
            $table->string('direccion_ruta', 50);
            $table->string('contactos', 50);
            $table->time('h_apertura')->nullable();
            $table->time('h_cierre')->nullable();
            $table->string('tipo_rutaTur', 50);
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
        Schema::dropIfExists('rutas__turisticas');
    }
};
