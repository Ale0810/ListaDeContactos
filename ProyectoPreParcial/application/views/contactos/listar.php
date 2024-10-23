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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($contactos as $c) { ?>
                                        <tr>
                                            <td class="text-center"><?=$c["apellido"]?></td>
                                            <td class="text-center"><?=$c["nombre"]?></td>
                                            <td class="text-center"><?=$c["email"]?></td>
                                            <td class="text-center"><?=$c["telefono"]?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-info">No hay contactos guardados</div>
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