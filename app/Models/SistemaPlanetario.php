<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaPlanetario extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'qtd_planeta',
        'qtd_estrela',
    ];
    public function estrela(){
        return $this->hasMany('App\Models\estrela', 'sistema_planetario');
    }
    public function planeta(){
        return $this->hasMany('App\Models\Planeta', 'sistema_planetario');
    }
}