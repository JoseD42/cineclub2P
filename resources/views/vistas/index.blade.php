<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="\CSS\index.css">  
  </head>
  <body>
    <div class="row grande text-center">
        <div class="col">
          <img class="logo" src="\Images\Logo.png" alt="">
            <h1>
                Bienvenido (Administrador)
            </h1>
        </div>
    </div>

    <div class="container">
      <div class="tabla">
          <div class="row primera">
              <div class="col">
                <h5 class="t_cuadro">
                  Películas por proyectar
                </h5>
              </div>
          </div>
              <div class="row text-center segunda">
                <div class="col">
                  <h5>
                    Título
                  </h5>
                </div>
                <div class="col-sm-1">
                    <h5>
                      Año
                    </h5>
                </div>
                <div class="col-sm-2">
                    <h5>
                      Duración
                    </h5>
                </div>
                <div class="col">
                    <h5>
                      Director
                    </h5>
                </div>
                <div class="col-sm-2">
                    <h5>
                      Género
                    </h5>
                </div>
              </div>
  
              @foreach ($peliculas as $pelicula)
              <div class="row tercera">
                <div class="col">
                  {{$pelicula->titulo}}
                </div>
                <div class="col-sm-1">
                  {{$pelicula->año}}
                </div>
                <div class="col-sm-2">
                  {{$pelicula->duracion}}
                </div>
                <div class="col">
                  {{$pelicula->director}}
                </div> 
                <div class="col-sm-2">
                  {{$pelicula->genero->nombre}}
                </div>          
              </div>
              @endforeach   
      </div>

      <div class="buttons">
        <div class="btn1">
          <a href="{{ route('vistas.añadirpeli') }}" class="btn btn-outline-secondary">Añadir Películas</a>
        </div>
        <div class="btn3">
          <a class="btn btn-outline-secondary" href="{{ route('vistas.admingen') }}">Administrar Géneros</a>
        </div>
      </div>
    </div>

    <img class="cinta" src="\Images\cinta.png" alt="">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>