<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Clientes</h1>
        <form action="agregar_cliente" method="post">
            <div class="mb-8">
                <label for="txtId" class="form-label">Id</label>
                <input type="number" id="txtId" name="txtId" class="form-control" placeholder="Ingrese id">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre">
            </div>
            <div class="mb-8">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese apellido">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo electrónico</label>
                <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese correo electrónico">
            </div>
            <div class="mb-8">
                <label for="txtCalleAvenida" class="form-label">Calle o avenida</label>
                <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control" placeholder="Ingrese calle o avenida">
            </div>
            <div class="mb-8">
                <label for="txtNoCasa" class="form-label">No. casa</label>
                <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control" placeholder="Ingrese no. casa">
            </div>
            <div class="mb-8">
                <label for="txtZona" class="form-label">Zona</label>
                <input type="number" id="txtZona" name="txtZona" class="form-control" placeholder="Ingrese zona">
            </div>
            <div class="mb-8">
                <input type="submit" class="btn btn-primary" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>