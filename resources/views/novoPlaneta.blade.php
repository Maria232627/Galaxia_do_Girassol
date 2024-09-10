@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CRIE UM NOVO PLANETA</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoPlaneta')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do planeta">
            </div>
            <div class="form-group">
                <label for="nome">Diametro:</label>
                <input type="float" class="form-control" name="diametro"
                       placeholder="0.0km">
            </div>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricao" 
                       placeholder="Xxxxxxxxxxxxxxxxxxx">
            </div>
            <div class="form-group">
                <label for="nome">Temperatura:</label>
                <input type="float" class="form-control" name="temperatura" 
                       placeholder="0°C">
            </div>
            <div class="form-group">
                <label for="nome">Idade:</label>
                <input type="int" class="form-control" name="idade" 
                       placeholder="0 anos">
            </div>
            <div class="form-group">
                <label for="nome">Gravidade:</label>
                <input type="float" class="form-control" name="gravidade" 
                       placeholder="0.0 m/s">
            </div>
            <div class="form-group">
                <label for="nome">Habitabilidade:</label>
                <input type="float" class="form-control" name="habitabilidade" 
                       placeholder="0.0 %">
            </div>
            <div class="form-group">
                <label for="nome">Quantidade de satélites naturais:</label>
                <input type="float" class="form-control" name="qtd_satelite_natural" 
                       placeholder="0">
            </div>
            <div class="form-group">
                <label for="sistema_planetario">Selecione o sistema planetário pertencente</label>
                <select class="form-control" name="sistema_planetario" id="sistema" required>
                    @foreach ($sistema_planetario as $item)
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