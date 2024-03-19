<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <style>
        form input{
            display: block;
        }
    </style>
</head>
<body>
    <form action="<?= base_url('clientes/guardar')?>" method="post">
        <h1>Nuevo Cliente</h1>
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" autocomplete="off">

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" autocomplete="off">

        <label for="cedula">Cédula:</label>
        <input type="number" name="cedula" autocomplete="off">

        <label for="telefono">Teléfono:</label>
        <input type="number" name="telefono" autocomplete="off">

        <label for="email">Email:</label>
        <input type="email" name="email" autocomplete="off">

        <button type="submit">Crear</button>
    </form>
</body>
</html>