<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/navbar') ?>

<!-- Main Content -->
<div class="container my-5">
    <?= $this->renderSection('content') ?>
</div>

<?= $this->include('layouts/footer') ?>
<?= $this->include('layouts/scripts') ?>
</body>
</html>