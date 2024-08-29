@extends('layout')
@section('content')
<div class="card border">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div><br />
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Planetas descobertos na galáxia</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Diametro</th>
                        <th>Descricao</th>
                        <th>Temperatura</th>
                        <th>Idade</th>
                        <th>Gravidade</th>
                        <th>Habitabilidade</th>
                        <th>Quantidade de satélites naturais</th>
                        <th>Sistema planetário</th>

                        <th style="text-align:center" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->diametro }}</td>
                        <td>{{ $item->descricao}}</td>
                        <td>{{ $item->temperatura}}</td>
                        <td>{{ $item->idade}}</td>
                        <td>{{ $item->gravidade}}</td>
                        <td>{{ $item->habitabilidade}}</td>
                        <td>{{ $item->qtd_satelite_natural}}</td>

                        <td style="text-align:center">
                            <a href="/planeta/editar/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/planetas/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja destruir esse planeta?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection