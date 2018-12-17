<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $table = 'certidoes';

    protected $fillable = [];

    public function instituicao(){
        return $this->belongsTo(Institucional::class);
    }
}
