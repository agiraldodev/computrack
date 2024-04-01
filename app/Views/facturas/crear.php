<?= $this->extend('plantilla') ?>

<?= $this->section('contenido') ?>

<h1>Generar factura</h1>

<table class="table table-hover table-sm">
	<thead>
        <th>Fecha ingreso</th>
	</thead>
	<tbody>
		<?php
		foreach ($ordenesFinalizadas as $ordenFinalizada):
			?>
			<tr>
				<td>
					<?= $ordenFinalizada['fechaIngreso'] ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?= $this->endSection() ?>