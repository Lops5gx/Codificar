<?php

use Illuminate\Database\Seeder;
use App\Models\ModelCliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelCliente $cliente)
    {
        //  CREATE SEED CLIENTE //
        $cliente->create([
            'id'=>'1',
            'name'=>'Camila',
        ]);

        $cliente->create([
            'id'=>'2',
            'name'=>'Isadora',
        ]);

        $cliente->create([
            'id'=>'3',
            'name'=>'Bruno',
        ]);
    }
}
