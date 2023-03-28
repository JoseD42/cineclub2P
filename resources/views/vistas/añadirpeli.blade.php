<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="\CSS\añadir_peli.css">
  </head>
  <body>
    <div class="row grande text-center">
        <div class="col">
          <img class="logo" src="\Images\Logo.png" alt="">
            <h1>
                Añadir Película
            </h1>
        </div>
    </div>


    <form action="{{route('añadirpeli.store')}}" method="POST">
      @csrf
    <div class="carta1">
      <div class="completo">
        <div class="card text-center poster">
          <div class="plus">
            <button class="btnmas">+</button>
          </div>
        </div>
        <div class="txtbajo text-center">
          Poster
        </div>
      </div>
    </div>

    <div class="carta2">
      <div class="completo2">
        <div class="card">
          <div class="margenint">
            <div class="row">
              <div class="col-2">
                <label class="form-label" for="titulo"><h4>Título</h4></label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="titulo" id="titulo">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-2">
                <label class="form-label" for="año"><h4>Año</h4></label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="año" id="año">
              </div>
            </div>
            
            <br>

            <div class="row">
              <div class="col-2">
                <label class="form-label" for="duracion"><h4>Duración</h4></label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="duracion" id="duracion">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-2">
                <label class="form-label" for="director"><h4>Director</h4></label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="director" id="director">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-2">
                <label class="form-label" for="genero"><h4>Genero</h4></label>
              </div>
              <div class="col">
                <select class="form-select" name="genero" id="">
                  <option value="" selected disabled>Elige Género</option>
                  @foreach ($generos as $genero)
                  <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            
            <div class="fecha">
              <div class="row texto">
                <h6>Añadir Fecha de Proyeccion:</h6>
              </div>

              <div class="row">
                <input type="date"> 
              </div>
            </div>

            <br>

          </div>
        </div>
      </div>

      <div class="botones">
        <div class="agregarbtn">
          <button type="submit" class="btn btn-lg" id="botoncrear"><h5>Agregar</h5></button>
        </div>

        <div class="btnmargin">
          <a class="btn btn-sm" href="{{ route('vistas.index') }}"><h7>Atras</h7></a>
        </div>
      </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>