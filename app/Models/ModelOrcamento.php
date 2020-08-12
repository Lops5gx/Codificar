<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\BootstrapFourPresenter;
use Illuminate\Support\ServiceProvider;

class ModelOrcamento extends Model
{
    protected $table ='Orcamento';
    protected $fillable =['id', 'name', 'id_cliente', 'id_funcionario', 'descricao', 'valor', 'created_at'];
    

    public function _relCliente(){
        return $this-> hasOne('App\Models\ModelCliente', 'id', 'id_cliente');
    }

    public function _relFuncionario(){

        return $this-> hasOne('App\Models\ModelFuncionario', 'id', 'id_funcionario');
    }

    
 }
