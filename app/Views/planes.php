<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('clientes');?>">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('lineas');?>">Líneas telefónicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('planes');?>">Planes</a>
            </li>
        </ul>
        <h1 class="text-center">Planes</h1>

        <a href="nuevo_plan" class="btn btn-primary">Nuevo Plan</a>

        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Plan ID</th>
                    <th>Nombre</th>
                    <th>Pago mensual</th>
                    <th>Cantidad de minutos</th>
                    <th>Cantidad de mensajes</th>
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
                        <a href="" class="btn btn-info">Actualizar</a>
                        <a href="eliminar_plan/<?php echo $plan['plan_id']?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>