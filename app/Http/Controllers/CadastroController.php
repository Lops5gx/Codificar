<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCliente;
use App\Models\ModelFuncionario;
use App\Models\ModelOrcamento;

class CadastroController extends Controller
{   
    private $objCliente;
    private $objFuncionario;
    private $objOrcamento;
    

    public function __construct()
    {
        $this->objCliente = new ModelCliente();
        $this->objFuncionario = new ModelFuncionario();
        $this->objOrcamento = new ModelOrcamento();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente =$this->objCliente->all();
        $funcionario=$this->objFuncionario->all();
        $orcamento=$this->objOrcamento->ALL()->sortByDesc('created_at');
        return view('index', compact('cliente','funcionario','orcamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
