<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light" style="box-shadow: 2px 2px 2px #bbb;">
    <div class="container" id="filter-btn-box">
        <a href="<?= $router->route('home.home') ?>" class="navbar-brand fs-5 fw-bold">
            <img class="logo-couros" src="<?= asset('storage/logo/logo.png') ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-center" id="navbar">
           <?php require __DIR__ . "/links.php" ?>
    </div>
</nav>


     