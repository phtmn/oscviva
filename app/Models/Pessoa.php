<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
        
    protected $fillable = [ 'nome_completo','data_nascimento','sexo','estado_civil','email','tratamento','cep','logradouro', 'bairro','cidade','uf','complemento','numero','cargo_id'];
}
