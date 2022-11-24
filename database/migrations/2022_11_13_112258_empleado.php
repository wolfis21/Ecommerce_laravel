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
        Schema::disableForeignKeyConstraints();
        Schema::create('empleado', function (Blueprint $table) {
            $table->bigIncrements('idEmpleado');
            $table->integer('id');
            $table->string('pname');
            $table->string('psubname');
            $table->date('fecha_n')->nullable();
            $table->string('direccion', 75)->nullable();
            $table->string('telefono', 35)->nullable();
            $table->string('cargo', 20);
            $table->unsignedBigInteger('zona_idZona');
            $table->foreign('zona_idZona')->references('idZona')->on('zona');
            $table->rememberToken();
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
        Schema::dropIfExists('empleado');
    }
};
