<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'cliente_id', 'marca', 'modelo', 'placa',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
