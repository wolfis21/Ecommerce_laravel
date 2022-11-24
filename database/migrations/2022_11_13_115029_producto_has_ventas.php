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
        Schema::create('producto_has_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('producto_idProducto');
            $table->foreign('producto_idProducto')->references('idProducto')->on('producto');
            $table->unsignedBigInteger('ventas_idVentas');
            $table->foreign('ventas_idVentas')->references('idVentas')->on('ventas');              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_has_ventas');
    }
};
