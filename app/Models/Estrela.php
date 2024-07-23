<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrela extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'diametro',
        'descricao',
        'temperatura',
        'idade',
        'gravidade',
    ];
}