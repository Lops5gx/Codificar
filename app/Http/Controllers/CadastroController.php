<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoRequest;
use App\Models\ModelCliente;
use App\Models\ModelFuncionario;
use App\Models\ModelOrcamento;
use App\Orcamento;

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
        $cliente = $this->objCliente->all();
        $funcionario= $this->objFuncionario->all();
        $orcamento= $this->objOrcamento->all();
        $orcamento = Orcamento::paginate(2)->sortByDesc('created_at');
        
        return view('index', compact('cliente','funcionario','orcamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente=$this->objCliente->all();
        $funcionario=$this->objFuncionario->all();
        return view('create', compact('cliente', 'funcionario'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrcamentoRequest $request)
    {
        $cadastro = $this->objOrcamento->create([
            'id'=>$request->id,
            'id_cliente'=>$request->id_cliente,
            'date'=>$request->created_at,
            'name'=>$request->name,
            'id_funcionario'=>$request->id_funcionario,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
        ]);
        if($cadastro)
            return redirect($to= 'orcamento');
        

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
        $orcamento=$this->objOrcamento->find($id);
        $cliente=$this->objCliente->all();
        $funcionario=$this->objFuncionario->all();
        return view('create', compact('orcamento', 'funcionario', 'cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrcamentoRequest $request, $id)
    {
        $data = $this->objOrcamento->where(['id'=>$id]);
        
        //$updated_at = date($request->created_at = 'time(d/m/y H:i:s)');

        $this->objOrcamento->where(['id'=>$id])->update([
            'id'=>$request->id,
            'id_cliente'=>$request->id_cliente,
            'created_at'=>$request->date,
            'name'=>$request->name,
            'id_funcionario'=>$request->id_funcionario,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
        ]);
        
        return redirect('orcamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->objOrcamento->destroy($id);
        return($delete)?"Sim":"Não";
    }
}
