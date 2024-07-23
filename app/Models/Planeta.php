<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planeta extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'diametro',
        'descricao',
        'temperatura',
        'idade',
        'gravidade',
        'habitabilidade',
        'qtd_satelite_natural'
    ];
}