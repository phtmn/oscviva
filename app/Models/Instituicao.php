<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = "instituicao";

    protected $fillable = ['razao_social', 
                            'nome_fantasia', 
                            'telefone1', 
                            'telefone2', 
                            'email', 
                            'site', 
                            'instagran', 
                            'facebook', 
                            'linkedink', 
                            'youtube', 
                            'cep', 
                            'estado', 
                            'cidade', 
                            'bairro', 
                            'logradouro', 
                            'tipo', 
                            'numero', 
                            'complemento', 
                            'edificio_condominio', 
                            'referencia', 
                            'cnpj', 
                            'inscricao_municipal', 
                            'inscricao_estadual', 
                            'data_constituicao', 
                            'registro_juntacomercial', 
                            'cnae_principal', 'cnae_secundario1', 
                            'cnae_secundario2', 
                            'cnae_secundario3', 
                            'cnae_secundario4', 
                            'cnae_secundario5', 
                            'cnae_secundario6'
    ];

      
    public function atas(){
        return $this->hasMany(Atas::class);
    }

    public function certidoes(){
        return $this->hasMany(Certidao::class);
    }

    public function diretorias(){
        return $this->hasMany(Diretoria::class);
    }
}
