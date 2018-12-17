<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ata extends Model
{

    protected $table = 'atas';

    protected $fillable = [];

    public function instituicao(){
        return $this->belongsTo(Institucional::class);
    }
}
