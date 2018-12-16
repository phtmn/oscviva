<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imobilizado extends Model
{
    protected $table = "imobilizados";

    protected $fillable = [ 'descricao','tipo_cadastro','estado_conservacao','status','valor','data_registro', 'manutencao_prevista'];
}
