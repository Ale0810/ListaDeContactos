<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Principal - Contactos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php $this->load->view('nav') ?>
  <div class="container ">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">Agregar Contacto</h1>
        <div class="card">
          <div class="card-body">
            <form action="<?=site_url("contactos/agregar")?>" method="post">
              <div class="mb-3">
                <label class="form-label" for="apellido">Apellido</label>
                <input class="form-control" type="text" id="apellido" name="apellido">
              </div>
              <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" type="text" id="nombre" name="nombre">
              </div>
              <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email">
              </div>
              <div class="mb-3">
                <label class="form-label" for="telefono">Telefono</label>
                <input class="form-control" type="text" id="telefono" name="telefono">
              </div>
              <div class="text-center">
                <button class="btn btn-outline-primary" type="submit">Guardar</button>
              </div>
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