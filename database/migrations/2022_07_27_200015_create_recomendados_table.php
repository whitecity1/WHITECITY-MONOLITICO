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
        Schema::create('recomendados', function (Blueprint $table) {
            $table->id();
            $table->string('lugar_recomendado', 50);
            $table->string('calificaciones', 50);
            $table->text('resenahistorica', 250);
            $table->string('imagen');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
                  ->on('users')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('recomendados');
    }
};
