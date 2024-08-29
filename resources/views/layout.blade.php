<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galáxia Girassol</title>
    @vite(['resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body id="body">
    <header class="display-block">
    @component('navbar')
    @endcomponent
    <header>
    <main role="main" id="slaa">
        @hasSection('content')
            @yield('content')
        @endif
    </main>
    
    <footer class="footer mt-auto py-3 navbar-fixed-bottom">
        <div class="container">
            
          
        </div>
    </footer>
</body>
</html>