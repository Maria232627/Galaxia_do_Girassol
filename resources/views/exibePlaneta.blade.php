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
                        <th style="text-align:center" colspan="4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item => $i)
                    <tr>
                        <td>{{ $i['id'] }}</td>
                        <td>{{ $i['nome'] }}</td>
                        <td>{{ $i['diametro'] }}</td>
                        <td>{{ $i['descricao'] }}</td>
                        <td>{{ $i['temperatura'] }}</td>
                        <td>{{ $i['idade'] }}</td>
                        <td>{{ $i['gravidade'] }}</td>
                        <td>{{ $i['habitabilidade'] }}</td>
                        <td>{{ $i['qtd_satelite_natural'] }}</td>
                        <td>{{ $i['sistema_planetario'] }}</td>

                        <td style="text-align:center">
                                <a href="/novoNacaoPlaneta/{{$i['id']}}" class="btn btn-success">Cadastra Nação</a>
                            </td>
                            <td style="text-align:center">
                            <a href="/nacaoPlaneta/detalhes/{{$i['id']}}" class="btn btn-secondary">Detalhes</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/planeta/editar/{{$i['id']}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/planeta/apagar/{{$i['id']}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja destruir esse planeta?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection