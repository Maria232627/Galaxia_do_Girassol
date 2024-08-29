@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    <div class="card-body">
        @if($dados["tabela"] == "estrelas")
            <form action="{{route('procuraEstrela')}}" method="GET">
        @elseif($dados["tabela"] == "nacaos")
            <form action="{{route('procuraNacao')}}" method="GET">
        @elseif($dados["tabela"] == "planetas")
            <form action="{{route('procuraPlaneta')}}" method="GET">
        @elseif($dados["tabela"] == "sistema_planetarios")
            <form action="{{route('procuraSistema')}}" method="GET">
        @endif
            @csrf
            <div class="form-group py-4">
                <label for="texto">Texto para pesquisa</label>
                <input type="text" class="form-control" name="texto" 
                    placeholder="Informe o texto para pesquisar">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection