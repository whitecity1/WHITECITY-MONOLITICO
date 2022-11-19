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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('evento');
            $table->string('municipio');
            $table->string('direccion');
            $table->time('horarios');
            $table->date('fecha_inicio', 25);
            $table->date('fecha_fin', 25);
            $table->text('descripcion', 250);
            $table->string('tipo_evento');
            $table->string('imagen');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('eventos');
    }
};
