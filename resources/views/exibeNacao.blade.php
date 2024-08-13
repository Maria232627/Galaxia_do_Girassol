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
        <h5 class="card-title" style="text-align: center">Cadastro de Estrela</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Nível de dominação</th>
                        <th>Nível de desenvolvimento</th>

                        <th style="text-align:center" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->especie }}</td>
                        <td>{{ $item->nivel_dominacao }}</td>
                        <td>{{ $item->nivel_desenv }}</td>

                        <td style="text-align:center">
                            <a href="/sistema/editar/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/sistema/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection