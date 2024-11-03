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
        <a href="/servicios" class="btn btn-success btn-lg m-2">Nuestros Servicios</a>
        <a href="/menu" class="btn btn-outline-light btn-lg m-2">Ver Menú</a>
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
                    <a href="/menu" class="btn btn-success">Ver Menú</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonios Section -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Testimonios</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p class="mb-0">“¡Excelente lugar para entrenar y trabajar! Las instalaciones son de primera.”</p>
                    <footer class="blockquote-footer">Ana Martínez</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p class="mb-0">“La comida es deliciosa y saludable. Un espacio único en la ciudad.”</p>
                    <footer class="blockquote-footer">Luis Rodríguez</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p class="mb-0">“Un ambiente excelente para enfocarse en el trabajo y en la salud.”</p>
                    <footer class="blockquote-footer">María López</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Contacto Section -->
<section class="text-center my-5">
    <h2>¿Interesado en ser parte de nuestro gimnasio cafetería?</h2>
    <p>¡Contáctanos o visítanos para más información!</p>
    <a href="/contacto" class="btn btn-primary btn-lg">Contáctanos</a>
</section>

<?= $this->endSection() ?>
