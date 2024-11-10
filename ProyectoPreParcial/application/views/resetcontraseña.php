<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Cambiar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php $this->load->view("nav") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cambiar Contraseña</h1>
                <?php if ($rsp = $this->session->flashdata("op")) {
                    switch ($rsp) {
                        case "error": ?>
                            <div class="alert alert-danger">Error al reestablecer contraseña</div>
                            <?php break;
                    }
                } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url("auth/cambiarpassword") ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label" for="nuevacontaseña">Nueva Contraseña</label>
                                <input class="form-control <?= form_error("nuevacontraseña") ? "is-invalid" : "" ?>"
                                    value="<?= set_value("nuevacontraseña") ?>" type="password" id="nuevacontraseña"
                                    name="nuevacontraseña">
                                <div class="invalid-feedback">
                                    <?= form_error("nuevacontraseña") ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="nuevacontaseña">Confirmar Contraseña</label>
                                <input class="form-control <?= form_error("confirmarcontraseña") ? "is-invalid" : "" ?>"
                                    value="<?= set_value("confirmarcontraseña") ?>" type="password"
                                    id="confirmarcontraseña" name="confirmarcontraseña">
                                <div class="invalid-feedback">
                                    <?= form_error("confirmarcontraseña") ?>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary" type="submit">Cambiar</button>
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