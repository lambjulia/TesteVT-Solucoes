<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="     sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <nav class="navbar navbar-expand-lg navbar-expand-s0" style="
    background: #3f286b">
         <div class="container-fluid">
          <a href="/">
            <img src="{{url('assets/img/logo.png')}}" class="img-navbar" style="width: 30%;
            height: 30%;">
        </a> 
      </div>
      <div class="container" style="padding-left: 30em">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">Funcionários</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('funcionarios')}}">Todos Funcionários</a></li>
                      <li><a class="dropdown-item" href="{{route('funcionarios.create')}}">Cadastrar Novo</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">Cartões</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('cartoes')}}">Todos os Cartões</a></li>
                      <li><a class="dropdown-item" href="{{route('cartoes.create')}}">Cadastrar Nova</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">Operadoras</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('operadoras')}}">Todas Operadoras</a></li>
                      <li><a class="dropdown-item" href="{{route('operadora.create')}}">Cadastrar Nova</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
      </div>
      </nav>
  </head>
  <body>
    @yield('content')
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>