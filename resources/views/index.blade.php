@extends('Template.template')

@section('content')
    <h1 class="text-center">Cadastro de Peças </h1>

    <div class="text-center">
        <a hrf="{{url(orcamento/create)}}">
          <button class="btn btn-success mt-4 mb-4">Cadastrar</button>
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
                  <th scope="row">{{$orcamentos->id}}</th>
                  <td>{{$nomeCliente->name}}</td>
                  <td>{{$orcamentos->created_at}}</td>
                  <td>{{$orcamentos->name}}</td>
                  <td>{{$nomeFuncionarios->name}}</td>
                  <td>{{$orcamentos->descricao}}</td>
                  <td>R$ {{$orcamentos->valor}}</td>
                </tr>

              @endforeach


          
          
        </tbody>
      </table>
</div>
    
@endsection