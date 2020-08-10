@extends('Template.template')

@section('content')
    <h1 class="text-center">Oficina 2.0 </h1>

    <div class="text-center">
        <a href="{{url('orcamento/create')}}">
          <button class="btn btn-success mt-4 mb-4">Cadastrar Orçamento</button>
        </a>

        <a href="{{url('/cliente')}}">
          <button class="btn btn-success mt-4 mb-4">Cadastrar Cliente</button>
        </a>

        <a href="{{url('/funcionario')}}">
          <button class="btn btn-success mt-4 mb-4">Cadastrar Funcionário</button>
        </a>
    </div>
<div class="col-10 m-auto">
    <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Cliente</th>
            <th scope="col">Data</th>
            <th scope="col">Orçamento</th>
            <th scope="col">Vendedor</th>
            <th scope="col">Descriçao</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        <tbody> 
              @foreach ($orcamento as $key => $orcamentos)
                @php
                  $nomeCliente = $orcamentos->find($orcamentos->id)->_relCliente;  
                  $nomeFuncionarios = $orcamentos->find($orcamentos->id)->_relFuncionario;
                @endphp
                <tr>
                  {{-- date_format($orcamentos->created_at,"d/m/y H:i:s") --}}
                  <th scope="row">{{$orcamentos->id}}</th>
                  <td>{{$nomeCliente->name}}</td>
                  <td>{{date_format($orcamentos->created_at,"d/m/y")}}</td>
                  <td>{{$orcamentos->name}}</td>
                  <td>{{$nomeFuncionarios->name}}</td>
                  <td>{{$orcamentos->descricao}}</td>
                  <td>R${{$orcamentos->valor}}</td>
                  <td>
                    <a  href="{{url("orcamento/$orcamentos->id/edit")}}"> 
                      <button class="btn btn-primary ">Editar</button>
                    </a>
                  </td>
                  <td>
                    <a href=""> 
                      <button class="btn btn-primary">Remover</button>
                    </a>
                  </td>
                </tr>
              @endforeach
        </tbody>
      </table>
</div>
    
@endsection