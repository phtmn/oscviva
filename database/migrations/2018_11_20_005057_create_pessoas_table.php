<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            //dados principais
            $table->increments('id');
            $table->string('nome_completo');
            $table->date('data_nascimento')->nullable();
            $table->string('tipo_cadastro')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('tratamento')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('telefone3')->nullable();
            //endereço
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('uf')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            //filiação
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->boolean('menor_14')->default(0);
            $table->integer('qdt_filhos')->default(0);
            $table->string('escolaridade')->nullable();
            //documentos
            $table->string('cpf_cnpj')->nullable();
            $table->string('rg')->nullable();
            $table->date('rg_emissao')->nullable();
            $table->string('rg_orgaoEmissor')->nullable();
            $table->string('ctps')->nullable();            
            $table->string('reservista')->nullable();
            $table->string('serie')->nullable();
            $table->string('categoria')->nullable();
            $table->string('titulo')->nullable();
            $table->string('zona')->nullable();
            $table->string('seccao')->nullable();
            $table->string('pis')->nullable();
            $table->string('cnh')->nullable();
            $table->string('cnh_emissao')->nullable();
            $table->string('cnh_categoria')->nullable();
            $table->string('cnh_vencimento')->nullable();
            //cargo-salario
            $table->unsignedInteger('cargo_id');
            $table->date('cargo_dtAdmissao')->nullable();
            $table->decimal('cargo_salario',10,2)->nullable();
            $table->string('cargo_horTrabalho')->nullable();
            $table->boolean('cargo_valeTransporte')->default(0);
            $table->integer('cargo_qtdValeTransporte')->nullable();
            $table->decimal('cargo_valorValeTransporte',10,2)->nullable();
            $table->integer('cargo_contratoExperiencia')->nullable();
            $table->string('cargo_localTrabalho')->nullable();            
            //especial
            $table->softDeletes(); //inclui campo 'deleted_at'
            $table->timestamps(); //inclui campos ['created_at','updated_at']
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
