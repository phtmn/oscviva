<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('menssageiro_id');
            $table->string('nome_completo');
            $table->string('nome_recibo');
            $table->date('data_nascimento')->nullable();
            $table->string('tipo_cadastro')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('tratamento')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('telefone3')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('uf')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->text('obs_financeiras')->nullable();
            $table->text('obs_pessoais')->nullable();
            $table->text('obs_gerais')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('menssageiro_id')->references('id')
                            ->on('menssageiros')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doadores');
    }
}
