<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <h1 class="text-center">Login</h1>
        <div class="card">
          <div class="card-body">
            <form action="<?=site_url("auth/acceder")?>" method="post">
              <div class="mb-3">
                <label class="form-label" for="usuario">Usuario</label>
                <input class="form-control" type="text" id="usuario" name="usuario">
              </div>
              <div class="mb-3">
                <label class="form-label" for="contrasena">Contrasena</label>
                <input class="form-control" type="password" id="contrasena" name="contrasena">
              </div>
              <button type="submit" class="btn btn-outline-primary">Acceder</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>