@extends('Template.template')

@section('content')
    <h1 class="text-center">Cadastrar Cliente</h1>

    <div class="col-8 m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        <form name="formCad" id="formCad" method="POST" action="{{url('cliente')}}">
            @csrf
            <input class="form-control" type="number" name="id" id="id" placeholder="Id do Cliente: " required><br>
            
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome do Cliente:" required><br>
            
            <input class="btn btn-primary" type="submit" value="Cadastrar"><br>
        </form>
    </div>
@endsection