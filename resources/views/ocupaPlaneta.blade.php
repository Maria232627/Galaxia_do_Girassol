<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CRIE UMA NOVA NAÇÃO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoNacaoPlaneta')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sistema_planetario">Selecione o planeta dominado</label>
                <select class="form-control" name="sistema_planetario" id="sistema" required>
                    @foreach ($dados $item)
                            <option value="{{$item->id}}">{{$item->nome}}</option>                      
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nome">Quantidade de ocupação:</label>
                <input type="text" class="form-control" name="qtd_ocupacao" 
                       placeholder="00%">
            </div>
            <div class="form-group">
                <label for="nome">Tipo de colonização:</label>
                <input type="radio" id="html" name="tipo_colonizacao" value="exploracao">
                <label for="html">Exploração</label><br>
                <input type="radio" id="html" name="tipo_colonizacao" value="povoamento">
                <label for="html">Povoamento</label><br>
            </div>
            <div class="form-group">
                <label for="nome">Nivel de desenvolvimento:</label>
                <input type="text" class="form-control" name="nivel_desenv" 
                       placeholder="00%">
            </div>
            
            
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
