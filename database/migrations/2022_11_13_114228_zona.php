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
        Schema::create('zona', function (Blueprint $table) {
            $table->bigIncrements('idZona');
            $table->string('direccion_z', 70)->nullable();
            $table->string('number_cont', 20)->nullable();
            $table->unsignedBigInteger('empresa_idEmpresa');
            $table->foreign('empresa_idEmpresa')->references('idEmpresa')->on('empresa');
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
        Schema::dropIfExists('zona');
    }
};
