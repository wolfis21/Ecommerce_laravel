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
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cedula');
            $table->string('pname');
            $table->string('psubname');
            $table->date('fecha_n')->nullable();
            $table->string('direccion', 75)->nullable();
            $table->string('telefono', 35)->nullable();
            $table->string('cargo', 20);
            $table->unsignedBigInteger('zona_id')->unsigned()->nullable();
            $table->foreign('zona_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('zonas');
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
        Schema::dropIfExists('empleados');
    }
};
