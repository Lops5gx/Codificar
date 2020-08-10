<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelFuncionario extends Model
{
    protected $table = 'Funcionario';
    protected $fillable =['id', 'name'];

    public function _relOrcamento(){

        return $this-> hasMany('App\Models\ModelOrcamento', 'id_funcionario');
    }
}
