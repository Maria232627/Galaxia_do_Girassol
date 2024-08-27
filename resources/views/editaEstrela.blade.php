@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE O CADASTRO DA ESTRELA</h1>
            </div>
        </div>
        <form action="/livro/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$dados->nome}}">
            </div>
            <div class="form-group">
                <label for="ano">Diâmetro:</label>
                <input type="float" class="form-control" name="diametro" value="{{$dados->diametro}}">
            </div>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricao" value="{{$dados->descricao}}">
            </div>
            <div class="form-group">
                <label for="nome">Temperatura:</label>
                <input type="float" class="form-control" name="temperatura" value="{{$dados->temperatura}}">
            </div>
            <div class="form-group">
                <label for="nome">Idade:</label>
                <input type="number" class="form-control" name="idade" value="{{$dados->idade}}">
            </div>
            <div class="form-group">
                <label for="nome">Gravidade:</label>
                <input type="float" class="form-control" name="gravidade" value="{{$dados->gravidade}}">
            </div>
            <div class="form-group">
                <label for="sistema_planetario">Selecione um sistema planetário</label>
                <select class="form-control" name="SistemaPlanetario" id="nome" required>
                    @foreach ($sistema_planetario as $item)
                       @if($dados->sistema_planetario == $item->id)
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