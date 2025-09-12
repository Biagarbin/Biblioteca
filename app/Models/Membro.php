<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = [
        'nome_completo',
        'endereco',
        'telefone',
        'data_cadastro'
    ];
}
