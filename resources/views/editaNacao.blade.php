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
        <form action="/livro/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="titulo" value="{{$dados->nome}}">
            </div>
            <div class="form-group">
                <label for="ano">Espécie:</label>
                <input type="text" class="form-control" name="ano" value="{{$dados->especie}}">
            </div>
            <div class="form-group">
                <label for="genero">Selecione o gênero do livro</label>
                <select class="form-control" name="genero" id="genero" required>
                    @foreach ($genero as $item)
                       @if($dados->genero_id == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->descricaoGenero}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->DescricaoGenero}}</option>
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