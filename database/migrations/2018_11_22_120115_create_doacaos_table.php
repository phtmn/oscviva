<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('doador_id');
            $table->string('formaPagamento')->nullable();
            $table->string('situacao')->nullable();
            $table->decimal('valor',10,2)->default(0);
            $table->decimal('extra',10,2)->default(0);
            $table->string('operador')->nullable();
            $table->text('obs_recibo')->nullable();
            $table->timestamps();

            $table->foreign('doador_id')->references('id')->on('doadores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doacaos');
    }
}
