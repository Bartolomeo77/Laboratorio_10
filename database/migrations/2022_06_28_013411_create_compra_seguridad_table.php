<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraSeguridadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_seguridad', function (Blueprint $table) {
            $table->id()->index();
            $table->integer('combo_1')->unique();
            $table->string('correo');
            $table->string('apellido');
            $table->string('nombre');
            $table->date('fecha_compra');
            $table->integer('dias_conscuridos');
            $table->date('fecha_fin_compra');
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
        Schema::dropIfExists('compra_seguridad');
    }
}
