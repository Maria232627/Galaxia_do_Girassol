<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NacaoPlaneta extends Model
{
    use HasFactory;
    protected $fillable=[
        'qtd_ocupacao',
        'qtd_colonisacao',
    ];
}
