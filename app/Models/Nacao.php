<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacao extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'especie',
        'nivel_dominacao',
        'nivel_desenv',
    ];
    public function nacao(){
        return $this->hasMany('App\Models\NacaoPlaneta', 'nacao');
    }
    public function planeta(){
        return $this->belongsTo('App\Models\Planeta');
    }
}
