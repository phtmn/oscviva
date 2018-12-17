<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucional extends Model
{
    protected $table = "institucionals";

    protected $fillable = ['razao_social', 'nome_fantasia', 'telefone1', 'telefone2', 'email', 'site', 'instagran', 'facebook', 'linkedink', 'youtube', 
                            'cep', 'estado', 'cidade', 'bairro', 'logradouro', 'tipo', 'numero', 'complemento', 'edificio_condominio', 'referencia', 
                            'cnpj', 'inscricao_municipal', 'inscricao_estadual', 'data_constituicao', 'registro_juntacomercial', 'cnae_principal', 'cnae_secundario1', 'cnae_secundario2', 'cnae_secundario3', 'cnae_secundario4', 'cnae_secundario5', 'cnae_secundario6', 
                            'descricao_certidao', 'data_emissao', 'data_vencimento', 'status', 'observacao_certidao', 
                            'descricao_ata', 'data_emissaoata', 'tipo_ata', 'observacao_ata', 
                            'colaborador', 'data_posse', 'data_termino', 'chapa', 'observacao_diretoria'];
}
