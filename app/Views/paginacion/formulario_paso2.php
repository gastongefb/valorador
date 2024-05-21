<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 2</title>
</head>
<body>
    <h1>Paso 2: Completa los datos</h1>
    <form action="<?php echo base_url('guardar-datos-paso2') ?>" method="post">
        <label fro="nombre2" class="col-sm-2 form-label">Nombre Dos</label>
        <input type="text" class="form-control" name="nombre2" autofocus>
        <label fro="apellido2" class="col-sm-2 form-label">Apellido Dos</label>
        <input type="text" class="form-control" name="apellido2" autofocus>
        <input type="submit" value="Siguiente">
    </form>
</body>
</html>
