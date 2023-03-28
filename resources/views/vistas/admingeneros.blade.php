<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="\CSS\admingen.css">
  </head>
  <body>
    <div class="row grande text-center">
        <div class="col">
            <a href="{{ route('vistas.index') }}">
                <img class="logo btn" src="\Images\Logo.png" alt="">
            </a>
            <h1>
                Administrador de Géneros
            </h1>
        </div>
    </div>

    <form method="POST" action="{{ route('admingeneros.store') }}">
     @csrf
        <div class="container">
            <div class="tabla">
                <div class="row text-center">
                    <div class="col-sm-4 genero">
                    <h5>
                        Géneros
                    </h5>
                    </div>
                    <div class="col-sm-1" id="vacio">
                        <h5>
                        </h5>
                    </div>
                </div>

                @foreach($generos as $genero)
                <div class="row">
                    <div class="col-sm-4">
                        {{ $genero->nombre }}
                    </div>
                    <div class="col-sm-1 borrar">
                        <button class="btn-sm borrar">Borrar</button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="username"><b class="texto">Agregar Género:</b></label>
                <br>
                <br>
                <input type="text" name="nombre" id="nombre" class="form-control ID">
                <br>
                <button id="btnAgregar" class="btn-group-lg" type="submit">Agregar</button>
            </div><br>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>