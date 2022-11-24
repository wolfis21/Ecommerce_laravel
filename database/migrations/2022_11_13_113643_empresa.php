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
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('idEmpresa');
            $table->string('rif_empresa', 20)->nullable();
            $table->string('name_empre', 30)->nullable();
            $table->text('descript_empre');
            $table->string('num_p', 75)->nullable();
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
        Schema::dropIfExists('empresa');
    }
};
