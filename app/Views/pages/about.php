<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>
    Sobre Nosotros
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- About Us Section -->
<section class="container my-5">
    <h2 class="text-center mb-4">Sobre Nosotros</h2>
    
    <!-- Misión, Visión y Valores -->
    <div class="row mb-5">
        <div class="col-md-6">
            <h3>Misión</h3>
            <p>Brindar un espacio innovador que fomente el bienestar físico y la productividad mental, donde los profesionales remotos pueden equilibrar su estlo de vida activo con su trabajo diario, en un ambiente cómodo, motivador y saludable.</p>
        </div>
        <div class="col-md-6">
            <h3>Visión</h3>
            <p>Ser el referente líder enespacios híbridos en México,ofreciendo una experienciaúnica que combine ejercicio,bienestar y productividad,mientras fomentamos unacomunidad saludable yactiva de trabajadoresremotos.
            </p>
        </div>
    </div>
    
    <!-- Valores -->
    <div class="mb-5">
        <h3 class="text-center">Nuestros Valores</h3>
        <ul class="list-unstyled d-flex justify-content-around flex-wrap text-center mt-4">
            <li><strong>Calidad</strong>: Nos esforzamos por ofrecer los mejores servicios.</li>
            <li><strong>Innovación</strong>: Siempre en la búsqueda de mejorar y adaptar nuestro espacio.</li>
            <li><strong>Salud</strong>: La salud física y mental de nuestros clientes es nuestra prioridad.</li>
            <li><strong>Compromiso</strong>: Estamos comprometidos con el bienestar de nuestra comunidad.</li>
        </ul>
    </div>

    <!-- Historia -->
    <div class="mb-5">
        <h3 class="text-center">Nuestra Historia</h3>
        <p class="text-center">Fundado en 2024, Flex&Focus nació con la idea de combinar ejercicio, trabajo y alimentación saludable en un solo lugar. Nos enorgullece ser un espacio donde las personas puedan cuidar su cuerpo, ser productivas y disfrutar de alimentos nutritivos en un ambiente cómodo y amigable.</p>
    </div>

    <!-- Equipo (Opcional) 
    <div class="text-center">
        <h3>Conoce a Nuestro Equipo</h3>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <img src="path/to/team1.jpg" alt="Miembro del equipo" class="rounded-circle" style="width: 150px; height: 150px;">
                <h5 class="mt-2">Nombre Apellido</h5>
                <p>Entrenador Principal</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="path/to/team2.jpg" alt="Miembro del equipo" class="rounded-circle" style="width: 150px; height: 150px;">
                <h5 class="mt-2">Nombre Apellido</h5>
                <p>Nutrióloga</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="path/to/team3.jpg" alt="Miembro del equipo" class="rounded-circle" style="width: 150px; height: 150px;">
                <h5 class="mt-2">Nombre Apellido</h5>
                <p>Coordinador de Coworking</p>
            </div>
        </div>
    </div> -->
</section>

<?= $this->endSection() ?>
