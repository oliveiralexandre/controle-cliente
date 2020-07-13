<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    protected $table = 'mensalidades';
    protected $primaryKey = 'id';

    protected $fillable = [
        'contrato_id', 'status', 'data_lancamento', 'data_vencimento',
        'data_pagamento',
    ];

    public function contrato()
    {
        return $this->belongsTo('App\Contrato');
    }
}
