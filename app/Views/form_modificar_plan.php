<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-success-subtle">
    <div class="container col-xl-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Modificar Plan</h1>
                <form action="<?=base_url('modificar_plan')?>" method="post">
                    <div class="md-3">
                        <label for="txtPlanId" class="form-label">Id</label>
                        <input type="number" id="txtPlanId" name="txtPlanId" class="form-control"
                            placeholder="Ingrese id del plan" value="<?=$datos['plan_id'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese nombre del plan" value="<?=$datos['nombre'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtPago" class="form-label">Pago mensual</label>
                        <input type="number" id="txtPago" name="txtPago" class="form-control"
                            placeholder="Ingrese pago mensual" value="<?=$datos['pago_mensual'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtMinutos" class="form-label">Cantidad de minutos</label>
                        <input type="number" id="txtMinutos" name="txtMinutos" class="form-control"
                            placeholder="Ingrese cantidad de minutos" value="<?=$datos['cantidad_minutos'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtMensajes" class="form-label">Cantidad de mensajes</label>
                        <input type="number" id="txtMensajes" name="txtMensajes" class="form-control"
                            placeholder="Ingrese cantidad de mensajes" value="<?=$datos['cantidad_mensajes'];?>">
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