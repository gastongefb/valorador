<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 1</title>
</head>
<body>
    <h1>Paso 1: Completa los datos</h1>
    <form action="<?php echo base_url('guardar-datos-paso1') ?>" method="post">
        <label fro="nombre1" class="col-sm-2 form-label">Nombre Uno</label>
        <input type="text" class="form-control" name="nombre1" autofocus>
        <label fro="apellido1" class="col-sm-2 form-label">Apellido Uno</label>
        <input type="text" class="form-control" name="apellido1" autofocus>
        <input type="submit" value="Siguiente">
    </form>
</body>
</html>


