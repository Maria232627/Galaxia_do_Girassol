@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE O CADASTRO DA NAÇÃO</h1>
            </div>
        </div>
        <form action="/nacao/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$dados->nome}}">
            </div>
            <div class="form-group">
                <label for="ano">Espécie:</label>
                <input type="text" class="form-control" name="especie" value="{{$dados->especie}}">
            </div>
            <div class="form-group">
                <label for="nome">Nivel de dominação:</label>
                <input type="text" class="form-control" name="nivel_dominacao" value="{{$dados->nivel_dominacao}}">
            </div>
            <div class="form-group">
                <label for="nome">Nivel de desenvolvimento:</label>
                <input type="text" class="form-control" name="nivel_desenv" value="{{$dados->nivel_desenv}}">
            </div>
            <div class="form-group">
                <label for="sistema_planetario">Selecione um sistema planetário</label>
                <select class="form-control" name="Planeta" id="nome" required>
                    @foreach ($planeta as $item)
                       @if($dados->planeta == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->nome}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->nome}}</option>
                        @endif
                    @endforeach
                </select>
              </div>
            <hr>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection