<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
    Servicios
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Nuestros Servicios</h2>
    
    <?php if (session()->getFlashdata('mensaje')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('mensaje') ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="<?= base_url('img/gym.jpg') ?>" class="card-img-top" alt="Gimnasio">
                <div class="card-body">
                    <h5 class="card-title">Gimnasio</h5>
                    <p class="card-text">Espacio totalmente equipado para tu entrenamiento físico. Contamos con máquinas de alta calidad y un ambiente motivador.</p>
                    <a href="<?php base_url(); ?>reservas" class="btn btn-success">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="<?= base_url('img/coworking.jpg') ?>" class="card-img-top" alt="Coworking">
                <div class="card-body">
                    <h5 class="card-title">Coworking</h5>
                    <p class="card-text">Un espacio dedicado para trabajar cómodamente, con conexión WiFi, estaciones de trabajo y un ambiente tranquilo.</p>
                    <a href="<?php base_url(); ?>reservas" class="btn btn-success">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="<?= base_url('img/cafeteria.jpg') ?>" class="card-img-top" alt="Cafetería Saludable">
                <div class="card-body">
                    <h5 class="card-title">Cafetería Saludable</h5>
                    <p class="card-text">Disfruta de opciones de comida saludable y bebidas nutritivas en nuestra cafetería. Un espacio ideal para recargar energías.</p>
                    <a href="<?php base_url(); ?>menu" class="btn btn-success">Ver Menú</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
