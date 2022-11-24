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
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('idVentas');
            $table->date('date_vent');
            $table->string('client_ref', 40)->nullable();
            $table->integer('cant_product')->nullable();
            $table->float('precio_total', 8, 2);     
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
        Schema::dropIfExists('ventas');
    }
};
