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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('documento',50);
            $table->string('direccion',50);
            $table->string('telefono',15);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           
            $table->unsignedBigInteger('tipo_persona_id');

            $table->foreign('tipo_persona_id')
                  ->references('id')->on('tipo_personas')
                  ->onDelete('cascade');

                  $table->unsignedBigInteger('notificacion_id');

                  $table->foreign('notificacion_id')
                        ->references('id')->on('notificacions')
                        ->onDelete('cascade');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
