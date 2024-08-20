<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div id="user">
      <img src="{{asset('storage/imagens/logo.png')}}" id="logo" alt="logo">
    </div>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('inicio')}}">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sistema Planetário</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="{{route('novoSistema')}}">Cadastrar Sistema Planetário</a>
            <a class="dropdown-item" href="{{route('exibeSistema')}}">Listar Sistema Planetário</a>
            <a class="dropdown-item" href="{{route('pesquisaSistema')}}">Pesquisar Sistema Planetário</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estrela</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{route('novoEstrela')}}">Cadastrar Estrela</a>
                <a class="dropdown-item" href="{{route('exibeEstrela')}}">Listar Estrela</a>
                <a class="dropdown-item" href="{{route('pesquisaEstrela')}}">Pesquisar Estrela</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planeta</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="{{route('novoPlaneta')}}">Cadastrar Planeta</a>
            <a class="dropdown-item" href="{{route('exibePlaneta')}}">Listar Planeta</a>
            <a class="dropdown-item" href="{{route('pesquisaPlaneta')}}">Pesquisar Planeta</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nação</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="{{route('novoNacao')}}">Cadastrar Nação</a>
            <a class="dropdown-item" href="{{route('exibeNacao')}}">Listar Nação</a>
            <a class="dropdown-item" href="{{route('pesquisaNacao')}}">Pesquisar Nação</a>
          </div>
        </li>
      </ul>
      
    </div>
  </nav>