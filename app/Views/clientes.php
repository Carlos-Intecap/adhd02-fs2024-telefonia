<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('clientes');?>">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('lineas');?>">Líneas telefónicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('planes');?>">Planes</a>
            </li>
        </ul>
        <h1 class="text-center">Clientes</h1>

        <a href="nuevo_cliente" class="btn btn-primary">Nuevo Cliente</a>

        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach($datos as $cliente):
              ?>
                <tr>
                    <td><?php echo $cliente['cliente_id'];?></td>
                    <td><?php echo $cliente['nombre']." ".$cliente['apellido'];?></td>
                    <td><?php echo $cliente['correo_electronico'];?></td>
                    <td>
                        <?php echo $cliente['calle_avenida'].
                        " ".$cliente['no_casa'].
                        " Zona ".$cliente['zona'];?>
                    </td>
                    <td>
                        <a href="" class="btn btn-info">Actualizar</a>
                        <a href="eliminar_cliente/<?php echo $cliente['cliente_id']?>" class="btn btn-danger">Eliminar</a>
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