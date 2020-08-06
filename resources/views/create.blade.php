@extends('Template.template');

@section('content')
    <h1 class="text-center">Cadastrar</h1>

    <div class="col-10 m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('orcamento')}}">
            @csrf
            <input class="form-control" type="number" name="id" id="id" placeholder="Id do Orçamento ">
            <input class="form-control" type="text" name="name" id="cliente" placeholder="Nome do Cliente ">
            <input class="form-control" type="date" name="date" id="date" placeholder="Data">
            <input class="form-control" type="text" name="orcamento" id="orcamento" placeholder="Orçamento">
            <input class="form-control" type="text" name="name" id="vendedor" placeholder="Nome do Vendedor ">
            <input class="form-control" type="text" name="name" id="descricao" placeholder="Descrição">
            <input class="form-control" type="number" name="id" id="valor" placeholder="Valor">
        </form>
    </div>
@endsection