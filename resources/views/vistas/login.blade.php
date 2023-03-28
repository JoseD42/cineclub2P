<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Cineclub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="\CSS\login.css">
  </head>
  <body>
    <img class="logo" src="\Images\Logo.png" alt="">
    <div class="login">
      <div class="container text-center">
        <div class="row grande">
          <div class="col">
            <h1>
              Iniciar Sesión
            </h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="form-group usuario">
          <label for="username"><b>ID de Administrador:</b></label><br>
          <input type="text" name="username" id="username" class="form-control ID">
        </div><br>

        <div class="form-group psw">
          <label for="psw"><b>Password</b></label>
          <input type="password" name="psw" id="psw" class="form-control ID">
        </div><br>

        <button class="btnlogin" type="submit">Ingresar</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>