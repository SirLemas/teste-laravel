<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'email', 'cpf', 'celular', 'conhecimentos', 'validado_em', 'validado'
    ];

    public $timestamps = false;
}
