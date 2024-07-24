<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-body-secondary">
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body fs-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('/')?>"><i class="bi bi-telephone"></i> Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('clientes')?>">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('lineas')?>">Líneas telefónicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url('planes')?>">Planes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <h1 class="text-center mt-2">Planes</h1>

        <a href="nuevo_plan" class="btn btn-success"><i class="bi-plus-circle"></i> Nuevo plan</a>

        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Plan ID</th>
                    <th>Nombre</th>
                    <th>Pago mensual</th>
                    <th>Cantidad de minutos</th>
                    <th>Cantidad de mensajes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
              foreach($datos as $plan):
              ?>
                <tr>
                    <td><?php echo $plan['plan_id'];?></td>
                    <td><?php echo $plan['nombre'];?></td>
                    <td><?php echo $plan['pago_mensual'];?></td>
                    <td><?php echo $plan['cantidad_minutos'];?></td>
                    <td><?php echo $plan['cantidad_mensajes'];?></td>
                    <td>
                        <a href="<?=base_url('buscar_plan/').$plan['plan_id']?>" class="btn btn-info"><i
                                class="bi-pencil-square"></i></a>
                        <a href="<?=base_url('eliminar_plan/').$plan['plan_id']?>" class="btn btn-danger"><i
                                class="bi-trash"></i></a>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>