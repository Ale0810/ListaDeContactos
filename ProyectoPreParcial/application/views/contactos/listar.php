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
                <h1 class="text-center">Lista de Contactos</h1>
                <?php if ($respuesta = $this->session->flashdata("respuesta")) {
                    switch ($respuesta) {
                        case "agregado": ?>
                            <div class="alert alert-success">Contacto agregado con exito!</div>
                            <?php break;
                        case "eliminado": ?>
                            <div class="alert alert-info">Contacto eliminado correctamente!</div>
                            <?php break;
                        case "no eliminado" or "no agregado": ?>
                            <div class="alert alert-danger">Ocurrio un error,intentelo nuevamente</div>
                            <?php break;
                        case "no encontrado": ?>
                            <div class="alert alert-info">No se encontro ningun contacto con ese apellido</div>
                            <?php break;
                    }
                    ?>
                <?php } ?>
                <form class="d-flex m-3" action="<?= site_url("contactos/listar") ?>" method="get" role="search">
                    <div class="text-start me-3">
                        <a class="btn btn-outline-secondary" href="<?= site_url("contactos/listar") ?>"><i
                                class="bi bi-backspace-fill"></i></a>
                    </div>
                    <input class="form-control me-2" name="buscar" type="search" placeholder="Buscar"
                        aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="card">
                    <div class="card-body">
                        <?php if (!empty($contactos)) { ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Apellido</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($contactos as $c) { ?>
                                        <tr>
                                            <td class="text-center"><?= $c["apellido"] ?></td>
                                            <td class="text-center"><?= $c["nombre"] ?></td>
                                            <td class="text-center"><?= $c["email"] ?></td>
                                            <td class="text-center"><?= $c["telefono"] ?></td>
                                            <td class="text-center"><a class="btn btn-outline-danger"
                                                    href="<?= site_url("contactos/eliminar?contacto_id=" . $c["contacto_id"]) ?>">
                                                    <i class="bi bi-trash-fill"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-primary">No hay contactos guardados</div>
                        <?php } ?>
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