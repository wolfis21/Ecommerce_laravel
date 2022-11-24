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
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('idProducto');
            $table->string('codig_produc', 20)->nullable();
            $table->string('name_product', 40)->nullable();
            $table->text('descrip_product')->nullable();
            $table->float('precio_product', 8, 2)->nullable();
            $table->integer('cant_stock')->nullable();
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
        Schema::dropIfExists('producto');
    }
};
