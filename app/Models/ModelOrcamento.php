<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelOrcamento extends Model
{
    protected $table ='Orcamento';

    public function _relCliente(){

        return $this-> hasOne('App\Models\ModelCliente', 'id', 'id_cliente');
    }

    public function _relFuncionario(){

        return $this-> hasOne('App\Models\ModelFuncionario', 'id', 'id_funcionario');
    }
}
