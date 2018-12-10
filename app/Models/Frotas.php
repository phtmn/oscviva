<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frotas extends Model
{
    protected $table = 'frotas';

    protected $fillable = [ 'ano','placa','marca','modelo','chassi','renavan'];
}
