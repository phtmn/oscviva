<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    //nome da tabela no banco de dados
    protected $table = 'doadores';

    //todos os campos que vão ser gravados através do form request automático devem estar dentro do array!
    protected $fillable = [ 'nome_completo','nome_recibo','data_nascimento','sexo','estado_civil','email','tratamento','cep','logradouro',
        'bairro','cidade','uf','complemento','numero','mensageiro_id','periodicidade','situacao','dia_pgto','obs_gerais','obs_pessoais','obs_financeiras'];
}
