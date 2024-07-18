<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Planes</h1>
        <form action="agregar_plan" method="post">
            <div class="mb-8">
                <label for="txtPlanId" class="form-label">Plan Id</label>
                <input type="text" id="txtPlanId" name="txtPlanId" class="form-control" placeholder="Ingrese id">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre">
            </div>
            <div class="mb-8">
                <label for="txtPagoMensual" class="form-label">Pago mensual</label>
                <input type="text" id="txtPagoMensual" name="txtPagoMensual" class="form-control" placeholder="Ingrese pago mensual">
            </div>
            <div class="mb-8">
                <label for="txtMinutos" class="form-label">Cantidad de minutos</label>
                <input type="text" id="txtMinutos" name="txtMinutos" class="form-control" placeholder="Ingrese cantidad de minutos">
            </div>
            <div class="mb-8">
                <label for="txtMensajes" class="form-label">Cantidad de mensajes</label>
                <input type="text" id="txtMensajes" name="txtMensajes" class="form-control" placeholder="Ingrese cantidad de mensajes">
            </div>
            <div class="mb-8">
                <input type="submit" class="btn btn-primary" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>