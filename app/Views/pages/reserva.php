<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
    Reservar
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <h2 class="text-center">Reservar Servicio</h2>

    <?php if (session()->getFlashdata('mensaje')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('mensaje') ?>
        </div>
    <?php endif; ?>

    <form action="<?php base_url(); ?>reservar" method="post">
        <div class="form-group">
            <label for="id_servicio">Servicio:</label>
            <select name="id_servicio" id="id_servicio" class="form-control" required>
                <option value="1">Gimnasio</option>
                <option value="2">Coworking</option>
                <option value="3">Cafetería Saludable</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_reserva">Fecha:</label>
            <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora_inicio">Hora de Inicio:</label>
            <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora_fin">Hora de Fin:</label>
            <input type="time" name="hora_fin" id="hora_fin" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Reservar</button>
    </form>
</div>

<?= $this->endSection() ?>
