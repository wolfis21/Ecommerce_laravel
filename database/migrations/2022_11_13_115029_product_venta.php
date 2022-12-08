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
        Schema::create('product_venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate()
                    ->references('id')->on('products');
            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate()
                    ->references('id')->on('ventas');        
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_venta');
    }
};
