<?php

use Illuminate\Database\Seeder;
use App\Models\ModelOrcamento;

class OrcamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelOrcamento $orcamento)
    {
        //  CREATE SEED ORÇAMENTO //

        $orcamento->create([
            'id'=>'1',
            'id_cliente'=>'1',
            'created_at'=>'2020-08-09',
            'name'=>'Troca de óleo',
            'id_funcionario'=>'2',
            'descricao'=>'Troca completa de Óleo',
            'valor'=>'1200',
        ]);

        $orcamento->create([
            'id'=>'2',
            'id_cliente'=>'2',
            'created_at'=>'2020-07-10',
            'name'=>'Pintura',
            'id_funcionario'=>'1',
            'descricao'=>'Pintura porta lateral carro Fiat Uno',
            'valor'=>'1500',
        ]);

        $orcamento->create([
            'id'=>'3',
            'id_cliente'=>'3',
            'created_at'=>'2020-10-05',
            'name'=>'Troca de Lanterna',
            'id_funcionario'=>'2',
            'descricao'=>'Troca completa das Lanternas dianteira',
            'valor'=>'800',
        ]);

        $orcamento->create([
            'id'=>'4',
            'id_cliente'=>'2',
            'created_at'=>'2020-03-15',
            'name'=>'Balanceamento',
            'id_funcionario'=>'3',
            'descricao'=>'Balanceamento completo',
            'valor'=>'750',
        ]);
    }
}
