<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImobilizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imobilizados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao')->nullable();
            $table->string('tipo_cadastro')->nullable();
            $table->string('estado_conservacao')->nullable();
            $table->string('status')->nullable();
            $table->decimal('valor', 10,2)->default(0)->nullable();
            $table->date('data_registro')->nullable();
            $table->date('manutencao_prevista')->nullable();
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
        Schema::dropIfExists('imobilizados');
    }
}
