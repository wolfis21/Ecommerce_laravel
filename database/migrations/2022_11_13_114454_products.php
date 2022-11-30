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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codig_produc', 20)->nullable();
            $table->string('name_product', 40)->nullable();
            $table->text('descrip_product')->nullable();
            $table->float('precio_product', 8, 2)->nullable();
            $table->integer('cant_stock')->nullable();
            $table->unsignedBigInteger('zona_id');
            $table->foreign('zona_id')
            ->cascadeOnUpdate()
            ->cascadeOnDelete()
            ->references('id')->on('zona');
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
        Schema::dropIfExists('products');
    }
};
