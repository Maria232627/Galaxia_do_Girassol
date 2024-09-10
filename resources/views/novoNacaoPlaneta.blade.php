@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UMA NAÇÃO PARA DOMINAR ESSE PLANETA</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoNacaoPlaneta')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sistema_planetario">Selecione a nação dominadora</label>
                <select class="form-control" name="nacao" id="sistema" required>
                    @foreach ($dados as $item)
                            <option value="{{$item->id}}">{{$item->nome}}</option>                      
                    @endforeach
                </select>
                <input type="hidden" name="planeta" value="{{$dados->id}}" id="planeta" >
            </div>

            <div class="form-group">
                <label for="qtd_ocupacao">Quantidade de ocupação:</label>
                <input type="text" class="form-control" name="qtd_ocupacao" 
                       placeholder="00%">
            </div>
            <div class="form-group">
                <h3>Tipo de colonização:</h3>
                <input type="radio" id="html" name="tipo_colonizacao" value="exploracao">
                <label for="html">Exploração</label><br>
                <input type="radio" id="html" name="tipo_colonizacao" value="povoamento">
                <label for="html">Povoamento</label><br>
            </div>
            
            
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
@endsection