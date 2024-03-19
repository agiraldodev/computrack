<h1>Editar Cliente</h1>
<form action="<?= base_url('clientes/actualizar/' . $cliente['id']) ?>" method="post">
    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" value="<?= $cliente['nombres']?>">

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" value="<?= $cliente['apellidos']?>">

    <label for="cedula">Cédula:</label>
    <input type="text" name="cedula" value="<?= $cliente['cedula']?>">

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="<?= $cliente['telefono']?>">

    <label for="correo">Email:</label>
    <input type="text" name="email" value="<?= $cliente['email']?>">

    <button type="submit">Actualizar</button>
</form>