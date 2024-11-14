<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
    Inicio
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="hero-section text-center text-white" style="background-image: url('img/banner.jpg'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="overlay">
        <h1 class="display-4">Bienvenido a Flex&Focus</h1>
        <p class="lead">Ejercicio, trabajo y alimentación saludable en un solo lugar.</p>
        <a href="<?php base_url(); ?>servicios" class="btn btn-success btn-lg m-2">Nuestros Servicios</a>
        <a href="<?php base_url(); ?>menu" class="btn btn-outline-light btn-lg m-2">Ver Menú</a>
    </div>
</div>

<!-- Servicios Section -->
<section class="my-5 text-center">
    <h2 class="mb-4">Nuestros Servicios</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="<?= base_url('img/gym.jpg') ?>" class="card-img-top" alt="Gimnasio">
                <div class="card-body">
                    <h5 class="card-title">Gimnasio</h5>
                    <p class="card-text">Espacio con el mejor equipo para que te mantengas en forma.</p>
                    <a href="/servicios#gym" class="btn btn-success">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="<?= base_url('img/coworking.jpg') ?>" class="card-img-top" alt="Coworking">
                <div class="card-body">
                    <h5 class="card-title">Coworking</h5>
                    <p class="card-text">Un espacio tranquilo para trabajar con WiFi y comodidades.</p>
                    <a href="/servicios#coworking" class="btn btn-success">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="<?= base_url('img/cafeteria.jpg') ?>" class="card-img-top" alt="Cafetería">
                <div class="card-body">
                    <h5 class="card-title">Cafetería Saludable</h5>
                    <p class="card-text">Opciones deliciosas y nutritivas para una vida sana.</p>
                    <a href="<?php base_url(); ?>menu" class="btn btn-success">Ver Menú</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonios Section -->
<section class="bg-light py-5 text-center">
<div class="reviews my-5">
        <h3 class="text-center mb-4">Testimonios</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="review p-3 shadow-sm">
                    <h5>Juan Pérez</h5>
                    <p class="text-warning">⭐⭐⭐⭐⭐</p>
                    <p>"El ambiente es increíble y el menú saludable me encanta. Ideal para trabajar después del ejercicio."</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="review p-3 shadow-sm">
                    <h5>María García</h5>
                    <p class="text-warning">⭐⭐⭐⭐</p>
                    <p>"Excelente lugar para relajarse y cuidar de la salud. Me encantan las opciones de smoothies."</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="review p-3 shadow-sm">
                    <h5>Carlos Ramírez</h5>
                    <p class="text-warning">⭐⭐⭐⭐⭐</p>
                    <p>"Muy buen servicio y las instalaciones son modernas y limpias. Muy recomendado."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto Section -->
<section class="text-center my-5">
    <h2>¿Interesado en ser parte de nuestro gimnasio cafetería?</h2>
    <p>¡Contáctanos o visítanos para más información!</p>
    <a href="<?php base_url(); ?>contact" class="btn btn-primary btn-lg">Contáctanos</a>
</section>

<?= $this->endSection() ?>
