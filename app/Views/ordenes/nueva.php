<?= $this->extend('plantilla') ?>

<?= $this->section('contenido') ?>

<h1>Nueva orden </h1>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="">Cédula</label>
                <input type="text" id="cedula" class="form-control" autocomplete="off">
                <button id="btnBuscarCliente" class="btn btn-primary">Buscar cliente</button>
            </div>
        </div>
        <div class="col-lg-8">
            <h3 id="nombreCliente">nombreCliente</h3>
        </div>
    </div>
    <div class="row mt-4">
        <table id="tablaDispositivos" class="table table-hover table-sm table-primary">
            <thead>
                <th>Tipo de Dispositivo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Serial</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <!-- Aquí se llenarán los datos dinámicamente -->
            </tbody>
        </table>
    </div>

    <form action="<?= site_url('ordenes/guardarOrden')?>" method="post" id="formularioOrden">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">Dispositivo</label>
                    <span class="badge text-bg-info" id="dispositivoSeleccionado"></span>
                    <!-- Agregar un campo oculto para almacenar el ID del dispositivo -->
                    <input type="hidden" name="dispositivo_id" id="dispositivo_id">
                </div>
            </div>
        </div>

        <!-- Enviar los datos y crear la orden -->
        <button type="submit" class="btn btn-warning mt-2">Registrar nueva orden al sistema</button>
    </form>
</div>

<?= $this->endSection() ?>