<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    @section('header')
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-warning border-success" href="/sucursales"><h4>Control Stock Sucursales</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning border-success " aria-current="page" href="/sucursales">Lista Sucursales Existentes</a>
        </li>
          <li class="nav-item">
            <a class="nav-link active text-warning border-success" aria-current="page" href="/sucursales/create">Crear Sucursal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-warning border-success " aria-current="page" href="/productos/create">Crear Producto</a>
          </li>
        
        
      </ul>
      <form action="{{ url('buscar')}}" class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


        
        @show
   
        @yield('content')

        @section('footer')
        <br>

        <div class="container-fluid  bg-dark text-white align-items-end" >
        <div class="row ">
          <div class="col-12">
            <center>
               <h4 class="text-warning">Framework seccion 51</h4><h4 class="text-warning"> Profesor: Victor Cofre</h4> <br>
                    <p class="text-warning"> Integrantes:<br>Francisco Cocio      Cancino<br>Leasy Tapia Fernandez <br>Isaac Aillapan Tapia   </p>
            </center>            
          </div>       
         </div>
        </div>
        
        @show





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>