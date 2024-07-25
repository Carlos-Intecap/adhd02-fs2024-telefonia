<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar líneas telefónicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-success-subtle">
    <div class="container col-xl-3">
        <h1 class="text-center mt-2">Agregar línea telefónica</h1>
        <form action="agregar_linea" method="post">
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">No. Teléfono</label>
                <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese no. teléfono">
            </div>
            <div class="mb-8">
                <label for="txtFechaPago" class="form-label">Fecha de pago</label>
                <input type="date" id="txtFechaPago" name="txtFechaPago" class="form-control" placeholder="Ingrese fecha de pago">
            </div>
            <div class="mb-8">
                <label for="txtMeses" class="form-label">Meses de atraso</label>
                <input type="number" id="txtMeses" name="txtMeses" class="form-control" placeholder="Ingrese meses de atraso">
            </div>
            <div class="mb-8">
                <label for="txtPlanId" class="form-label">Id Plan</label>
                <input type="number" id="txtPlanId" name="txtPlanId" class="form-control" placeholder="Ingrese el id del plan">
            </div>
            <div class="mb-8">
                <label for="txtClienteId" class="form-label">Id Cliente</label>
                <input type="number" id="txtClienteId" name="txtClienteId" class="form-control" placeholder="Ingrese el id del cliente">
            </div>
            <div class="mb-8">
                <input type="submit" class="btn btn-success form-control mt-2" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>