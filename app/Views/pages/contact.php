<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="container my-5">
    <h2 class="text-center mb-4">Contáctanos</h2>

    <!-- Información de Contacto -->
    <div class="text-center mb-5">
        <p><strong>Teléfono:</strong> +52 555 123 4567</p>
        <p><strong>Email:</strong> info@flex&focus.com</p>
        <p><strong>Dirección:</strong> Calle Universidad #123, Ciudad de México, México</p>
    </div>

    <!-- Formulario de Contacto -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/contact/send" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <!-- Reseñas de Clientes -->
    <div class="reviews my-5">
        <h3 class="text-center mb-4">Lo que dicen nuestros clientes</h3>
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

<?= $this->endSection() ?>
