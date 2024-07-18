<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Líneas Telefónicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('clientes');?>">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('lineas');?>">Líneas telefónicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('planes');?>">Planes</a>
            </li>
        </ul>
        <h1 class="text-center">Líneas Telefónicas</h1>

        <a href="nueva_linea" class="btn btn-primary">Nueva Línea Telefónica</a>

        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Teléfono</th>
                    <th>Fecha de pago</th>
                    <th>Meses atrasados</th>
                    <th>ID Plan</th>
                    <th>ID Cliente</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach($datos as $linea):
              ?>
                <tr>
                    <td><?php echo $linea['no_telefono'];?></td>
                    <td><?php echo $linea['fecha_pago'];?></td>
                    <td><?php echo $linea['meses_atraso'];?></td>
                    <td><?php echo $linea['plan_id'];?></td>
                    <td><?php echo $linea['cliente_id'];?></td>
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