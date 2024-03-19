<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado Clientes</title>
</head>

<body>
	<h1>Listado Clientes</h1>
	<a href="<?= base_url('clientes/nuevo') ?>">Crear nuevo cliente</a>
	<table>
		<thead>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cédula</th>
			<th>Telefono</th>
			<th>Email</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<?php
			foreach ($clientes as $cliente):
				?>
				<tr>
					<td>
						<?= $cliente['nombres'] ?>
					</td>
					<td>
						<?= $cliente['apellidos'] ?>
					</td>
					<td>
						<?= $cliente['cedula'] ?>
					</td>
					<td>
						<?= $cliente['telefono'] ?>
					</td>
					<td>
						<?= $cliente['email'] ?>
					</td>
					<td>
						<form action="<?= base_url('clientes/editar/' . $cliente['id']) ?>" method="get">
							<button class="btn btn-warning btn-sm" type="submit">Editar</button>
						</form>
						<form id="delete-form-<?= $cliente['id'] ?>" action="<?= base_url('clientes/delete/' . $cliente['id']) ?>"
							method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>

</html>