<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'cliente_id', 'produto_id', 'data_contrato', 'data_vencimento_contrato',
        'dia_vencimento', 'valor',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }
}
