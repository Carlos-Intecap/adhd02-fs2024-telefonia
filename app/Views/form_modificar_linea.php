<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar líneas telefónicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-success-subtle">
    <div class="container col-xl-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Modificar línea telefónica</h1>
                <form action="<?=base_url('modificar_linea')?>" method="post">
                    <div class="md-3">
                        <label for="txtTelefono" class="form-label">No. Teléfono</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control"
                            placeholder="Ingrese no. de teléfono" value="<?=$datos['no_telefono'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtFechaPago" class="form-label">Fecha de pago</label>
                        <input type="number" id="txtFechaPago" name="txtFechaPago" class="form-control"
                            placeholder="Ingrese fecha de pago" value="<?=$datos['fecha_pago'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtMeses" class="form-label">Meses de atraso</label>
                        <input type="number" id="txtMeses" name="txtMeses" class="form-control"
                            placeholder="Ingrese pago mensual" value="<?=$datos['meses_atraso'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtPlanId" class="form-label">Id Plan</label>
                        <input type="number" id="txtPlanId" name="txtPlanId" class="form-control"
                            placeholder="Ingrese ID del plan" value="<?=$datos['plan_id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">Id Cliente</label>
                        <input type="number" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese ID del cliente" value="<?=$datos['cliente_id'];?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success form-control mt-2" value="Guardar cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>