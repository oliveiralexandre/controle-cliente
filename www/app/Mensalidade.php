<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    protected $table = 'mensalidades';
    protected $primaryKey = 'id';

    protected $fillable = [
        'contrato_id', 'status', 'data_lancamento', 'data_vencimento',
        'data_pagamento', 'preference_id', 'init_point', 'status_uri',
        'collection_id', 'collection_status', 'external_reference',
        'payment_type', 'merchant_order_id', 'processing_mode',
        'merchant_account_id',
    ];

    public function contrato()
    {
        return $this->belongsTo('App\Contrato');
    }
}
