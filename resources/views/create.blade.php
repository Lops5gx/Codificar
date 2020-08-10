@extends('Template.template')

@section('content')
    <h1 class="text-center">@if(isset($orcamento))Editar @else Cadastrar @endif</h1>

    <div class="col-8 m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>
        @endif
        

    @if(isset($orcamento))
        <form name="formEdit" id="formEdit" method="POST" action="{{url("orcamento/$orcamento->id")}}">
            @method('PUT')
    @else
        <form name="formCad" id="formCad" method="POST" action="{{url('orcamento')}}">
    @endif
            @csrf
            <input class="form-control" type="number" name="id" id="id" value= "{{$orcamento->id ?? ''}}" placeholder="Id do Orçamento: " required><br>
                
            <select class="form-control" name = "id_cliente" id="id_cliente " required>
                <option value= "{{$orcamento->_relCliente->id ?? ''}}">{{$orcamento->_relCliente->name ?? 'Selecione o Cliente:'}}</option>
                    @foreach ($cliente as $clientes)
                        <option value="{{$clientes->id}}">{{$clientes->name}}</option>
                    @endforeach
            </select><br>

                
            <input class="form-control" type="date" name="date" id="created_at" value= "{{$data_format ?? ''}}"  required><br>

            <input class="form-control" type="text" name="name" id="name" value= "{{$orcamento->name ?? ''}}" placeholder="Orçamento:" required><br>
                
            <select class="form-control" name = "id_funcionario" id="id_funcionario " required>
                <option value= "{{$orcamento->_relFuncionario->id ?? ''}}">{{$orcamento->_relFuncionario->name ?? 'Selecione o Funcionário:'}}</option>
                    @foreach ($funcionario as $funcionarios)
                        <option value="{{$funcionarios->id}}">{{$funcionarios->name}}</option>
                    @endforeach
            </select><br>

            <input class="form-control" type="text" name="descricao" id="descricao" value= "{{$orcamento->descricao ?? ''}}" placeholder="Descrição:" required><br>
                
            <input class="form-control" type="number" name="valor" id="valor" value= "{{$orcamento->valor ?? ''}}" placeholder="Valor:" required><br>
                
            <input class="btn btn-primary" type="submit" value="@if(isset($orcamento))Editar @else Cadastrar @endif"><br>
        </form>
    </div>
@endsection