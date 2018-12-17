<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiretoriaMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diretoria_membros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diretoria_id');
            $table->string('colaborador')->nullable();
            $table->date('posse')->nullable();
            $table->date('termino')->nullable();
            $table->string('cargo')->nullable();
            $table->text('observacoes');

            $table->foreign('diretoria_id')      //nome do campo de chave estrangeira
                    ->references('id')          //campo da tabela pai
                    ->on('diretorias')          //nome da tabela pai
                    ->onDelete('cascade');      //ao excluir o pai exclui os filhos =D!
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
        Schema::dropIfExists('diretoria_membros');
    }
}
