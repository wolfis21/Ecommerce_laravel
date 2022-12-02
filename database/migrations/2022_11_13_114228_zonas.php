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
        Schema::create('zonas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion_z', 70)->nullable();
            $table->string('number_cont', 20)->nullable();
            $table->unsignedBigInteger('empresa_id')->unsigned()->nullable();
            $table->foreign('empresa_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('empresas');
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
        Schema::dropIfExists('usuario');
        Schema::dropIfExists('empleados');
        Schema::dropIfExists('zonas');
        Schema::dropIfExists('empresas');
    }
};
