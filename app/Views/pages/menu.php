<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="container my-5">
    <h2 class="text-center mb-4">Nuestro Menú</h2>

    <!-- Sección de Desayunos -->
    <div class="menu-category my-4">
        <h3 class="text-success">Desayunos</h3>
        <div class="row">
            <div class="col-md-6">
                <h5>Avocado Toast</h5>
                <p>Tostada con aguacate, huevo y una pizca de especias. $70 MXN</p>
            </div>
            <div class="col-md-6">
                <h5>Panqueques Saludables</h5>
                <p>Hechos con avena y fruta fresca. $80 MXN</p>
            </div>
        </div>
    </div>

    <!-- Sección de Almuerzos -->
    <div class="menu-category my-4">
        <h3 class="text-success">Almuerzos</h3>
        <div class="row">
            <div class="col-md-6">
                <h5>Ensalada de Quinoa</h5>
                <p>Quinoa con vegetales frescos y aderezo de la casa. $90 MXN</p>
            </div>
            <div class="col-md-6">
                <h5>Wrap de Pollo</h5>
                <p>Wrap integral con pollo, vegetales y salsa ligera. $85 MXN</p>
            </div>
        </div>
    </div>

    <!-- Sección de Bebidas -->
    <div class="menu-category my-4">
        <h3 class="text-success">Bebidas</h3>
        <div class="row">
            <div class="col-md-6">
                <h5>Jugo Verde</h5>
                <p>Jugo de vegetales frescos para empezar el día con energía. $50 MXN</p>
            </div>
            <div class="col-md-6">
                <h5>Smoothie de Frutas</h5>
                <p>Smoothie de frutas mixtas sin azúcar añadida. $60 MXN</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>