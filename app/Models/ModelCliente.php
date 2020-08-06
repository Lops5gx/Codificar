<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCliente extends Model
{
    protected $table = 'Cliente';

    public function _relOrcamento(){

        return $this-> hasMany('App\Models\ModelOrcamento', 'id_cliente');
    }
}


