<!doctype html>
<html lang="pt-br">

<head>
  <title><?= $title ?></title>
  <link rel="shortcut icon" href="<?= asset('storage/logo/favicon.ico')?>" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--CSS--->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= asset('css/_classes.css')?>">
  <link rel="stylesheet" href="<?= asset('css/navbar.css')?>">
  <link rel="stylesheet" href="<?= asset('css/home.css')?>">
  <link rel="stylesheet" href="<?= asset('css/contato.css')?>">
  <link rel="stylesheet" href="<?= asset('css/scroll.css')?>">
  <link rel="stylesheet" href="<?= asset('css/_queries.css')?>">

   <!--font awesome-->
   <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <?= $this->insert('components/navbar') ?>
  </header>

  <main>
    <?= $this->section('content') ?>
  </main>

  <footer>
    <?= $this->insert('components/footer')?>
  </footer>

  <!--Scripts--->
  <script src="<?= asset('js/bootstrap.js')?>"></script>
  <script src="<?= asset('js/bootstrap.min.js')?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="<?= asset('js/bootstrap.js')?> " defer></script>
  <script src="<?= asset('js/scroll.js')?>"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
</body>

</html>