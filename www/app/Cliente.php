<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome', 'cpf', 'email', 'data_aniversario', 'cep', 'endereco',
        'numero', 'complemento', 'bairro', 'cidade', 'estado', 'ddd', 'telefone'
    ];
}
