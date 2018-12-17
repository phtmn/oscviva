<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('instituicao_id');
            $table->string('descricao')->nullable();
            $table->date('dt_emissao')->nullable();
            $table->string('tipo')->nullable();            
            $table->text('observacao')->nullable();

            // chave estrangeira em institucional
            $table->foreign('instituicao_id')       //nome do campo de chave estrangeira
                        ->references('id')          //campo da tabela pai
                        ->on('instituicao')      //nome da tabela pai
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
        Schema::dropIfExists('atas');
    }
}
