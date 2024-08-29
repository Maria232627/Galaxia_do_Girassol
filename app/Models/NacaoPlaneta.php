<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NacaoPlaneta extends Model
{
    use HasFactory;
    protected $fillable=[
        'planeta',
        'nacao',
        'qtd_ocupacao',
        'tipo_colonizacao',
    ];
    public function planeta(){
        return $this->belongsTo('App\Models\Planeta');
    }
    public function nacao(){
        return $this->belongsTo('App\Models\Nacao');
    }
}
