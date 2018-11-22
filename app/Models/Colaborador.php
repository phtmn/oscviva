<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    //nome da tabela no banco de dados
    protected $table = 'colaboradores';

    //todos os campos que vão ser gravados através do form request automático devem estar dentro do array!
    protected $fillable = [ 'nome_completo','data_nascimento','sexo','estado_civil','email','tratamento','cep','logradouro',
                            'bairro','cidade','uf','complemento','numero','cargo_id'];
}
