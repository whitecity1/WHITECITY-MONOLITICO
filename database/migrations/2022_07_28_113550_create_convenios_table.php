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
        Schema::create('convenios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_firma');
            $table->date('fecha_finalizacion');
            $table->string('observaciones');

            // $table->unsignedBigInteger('servicio_id');
            // $table->foreign('servicio_id')->references('id')
            //       ->on('servicios')
            //       ->onDelete('cascade');

            // $table->unsignedBigInteger('evento_id')->nullable();
            // $table->foreign('evento_id')->references('id')
            //             ->on('eventos')
            //             ->onDelete('cascade');

            $table->unsignedBigInteger('tipo__convenio_id');
            $table->foreign('tipo__convenio_id')->references('id')
                       ->on('tipo__convenios');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
                             ->on('users')
                             ->onDelete('cascade');

            // $table->unsignedBigInteger('lugarturistico_id')->nullable();
            // $table->foreign('lugarturistico_id')->references('id')
            //                  ->on('lugarturisticos')
            //                  ->onDelete('cascade');
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
        Schema::dropIfExists('convenios');
    }
};
