<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Modificar Cliente</h1>
                <form action="<?=base_url('modificar_cliente')?>" method="post">
                    <div class="md-3">
                        <label for="txtClienteId" class="form-label">Cliente Id</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese id del cliente"
                            value="<?=$datos['cliente_id'];?>"
                            readonly
                            >
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                        placeholder="Ingrese nombre del cliente"
                        value="<?=$datos['apellido'];?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                        placeholder="Ingrese apellido del cliente"
                        value="<?=$datos['nombre'];?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label">Correo electrónico</label>
                        <input type="text" id="txtCorreo" name="txtCorreo" class="form-control"
                        placeholder="Ingrese pago mensual"
                        value="<?=$datos['correo_electronico'];?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="txtCalle" class="form-label">Calle/Avenida</label>
                        <input type="text" id="txtCalle" name="txtCalle" class="form-control"
                        placeholder="Ingrese calle o avenida"
                        value="<?=$datos['calle_avenida'];?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="txtNoCasa" class="form-label">No. Casa</label>
                        <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control"
                        placeholder="Ingrese no. de casa"
                        value="<?=$datos['no_casa'];?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="txtZona" class="form-label">Zona</label>
                        <input type="text" id="txtZona" name="txtZona" class="form-control"
                        placeholder="Ingrese zona"
                        value="<?=$datos['zona'];?>"
                        >
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success form-control" value="Guardar cambios">
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