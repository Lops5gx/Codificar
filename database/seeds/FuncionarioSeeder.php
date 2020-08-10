<?php

use Illuminate\Database\Seeder;
use App\Models\ModelFuncionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelFuncionario $funcionario)
    {
         //  CREATE SEED FUNCIONÁRIO //   

         $funcionario->create([
            'id'=>'1',
            'name'=>'Rebeca',
        ]);

        $funcionario->create([
            'id'=>'2',
            'name'=>'Ricardo',
        ]);
        
        $funcionario->create([
            'id'=>'3',
            'name'=>'Daniela',
        ]);
    }
}
