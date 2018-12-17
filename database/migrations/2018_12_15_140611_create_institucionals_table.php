<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucionals', function (Blueprint $table) {
            //dados cadastrais
            $table->increments('id');
            $table->string('razao_social')->nullable();
            $table->string('nome_fantasia')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('site');
            $table->string('instagran');
            $table->string('facebook');
            $table->string('linkedink');
            $table->string('youtube');
            //endereço
            $table->string('cep')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('tipo')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento');
            $table->string('edificio_condominio');
            $table->string('referencia');
            //contabil
            $table->string('cnpj')->nullable();
            $table->string('inscricao_municipal')->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->date('data_constituicao')->nullable();
            $table->string('registro_juntacomercial')->nullable();
            $table->string('cnae_principal')->nullable();
            $table->string('cnae_secundario1');
            $table->string('cnae_secundario2');
            $table->string('cnae_secundario3');
            $table->string('cnae_secundario4');
            $table->string('cnae_secundario5');
            $table->string('cnae_secundario6');
            //certidões
            $table->string('descricao_certidao')->nullable();
            $table->date('data_emissao')->nullable();
            $table->date('data_vencimento');
            $table->string('status')->nullable();
            $table->string('observacao_certidao');
            //atas
            $table->string('descricao_ata')->nullable();
            $table->date('data_emissaoata')->nullable();
            $table->string('tipo_ata');
            $table->string('observacao_ata');
            //diretoria
            $table->string('colaborador')->nullable();
            $table->date('data_posse')->nullable();
            $table->date('data_termino')->nullable();
            $table->string('chapa')->nullable();
            $table->string('observacao_diretoria')->nullable();
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
        Schema::dropIfExists('institucionals');
    }
}
