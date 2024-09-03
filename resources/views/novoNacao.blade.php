@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CRIE UMA NOVA NAÇÃO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoNacao')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome da nação">
            </div>
            <div class="form-group">
                <label for="nome">Espécie:</label>
                <input type="text" class="form-control" name="especie" 
                       placeholder="Informe a espécie da nação">
            </div>
            <div class="form-group">
                <label for="nome">Nivel de dominação:</label>
                <input type="text" class="form-control" name="nivel_dominacao" 
                       placeholder="00%">
            </div>
            <div class="form-group">
                <label for="nome">Nivel de desenvolvimento:</label>
                <input type="text" class="form-control" name="nivel_desenv" 
                       placeholder="00%">
            </div>
            <div class="form-group">
                <label for="planeta">Selecione o sistema planeta pertencente</label>
                <select class="form-control" name="planeta" id="planeta" required>
                    @foreach ($planeta as $item)
                            <option value="{{$item->id}}">{{$item->nome}}</option>                      
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
@endsection