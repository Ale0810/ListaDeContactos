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
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">Login</h1>
        <?php if($respuesta = $this->session->flashdata("auth")){
          switch($respuesta)
          {
            case "acceso denegado": ?>
            <div class="alert alert-danger">Acceso denegado,compruebe los datos ingresados</div>
            <?php break;
          }
        } ?>
        <div class="card">
          <div class="card-body">
            <form action="<?= site_url("auth/acceder") ?>" method="post">
              <div class="mb-3">
                <label class="form-label" for="usuario">Usuario</label>
                <input class="form-control <?=form_error("usuario")? "is-invalid" : ""?>" value="<?=set_value("usuario")?>" type="text" id="usuario" name="usuario">
                <div class="invalid-feedback">
                    Complete el campo con su nombre de usuario
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="contrasena">Contraseña</label>
                <input class="form-control <?=form_error("contrasena")? "is-invalid" : ""?>" value="<?=set_value("contrasena")?>" type="password" id="contrasena" name="contrasena">
                <div class="invalid-feedback">
                    Complete el campo con su contraseña
                </div>
              </div>
              <div class="text-start">
                <a href="<?=site_url("auth/cambiarcontraseña")?>" class="icon-link icon-link-hover">Olvide mi Contraseña</a>
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