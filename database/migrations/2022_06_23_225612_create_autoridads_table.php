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
        Schema::create('autoridads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_entidad', 50);
            $table->string('imagen');
            $table->string('telefono', 50);
            $table->string('correo', 50);
            $table->string('mun_ubicado', 50);
            $table->string('direccion', 50);
            $table->time('apertura');
            $table->time('cierre');
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
        Schema::dropIfExists('autoridads');
    }
};
