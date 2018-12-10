<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ano')->nullable();
            $table->string('chassi')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('placa')->nullable();
            $table->string('renavan')->nullable();
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
        Schema::dropIfExists('frotas');
    }
}
