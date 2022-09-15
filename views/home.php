<?php $this->layout('components/_theme') ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= asset('storage/slider/slider1.png') ?>" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= asset('storage/slider/slider2.jpg') ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= asset('storage/slider/slider3.jpg') ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="texto">NOSSAS CARTEIRAS</div>
        </div>
        <div class="col-lg-4">
            <h1 class="text-center vibes fs">Materias sustentáveis</h1>
            <p class="text-center">Nossos tecidos são produzidos <br> com o menor impacto ambiental possível.<br> Sem origem animal.</p>
        </div>
        <div class="col-lg-4">
            <h1 class="text-center vibes fs">Feito á mão</h1>
            <p class="text-center ">Valorizamos a mão de obra <br> e contribuímos para o aumento da <br> economia local.</p>
        </div>
        <div class="col-lg-4">
            <h1 class="text-center vibes fs">Modo Atemporal</h1>
            <p class="text-center">Qualidade e design duradouros.<br> Para todos os corpos<br> e gêneros.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="texto">MAIS VENDIDOS</div>
        </div>
        <div class="col-md-4">
              <div class="card mb-4  carteira">

                <figure id="fig1">
                <img class="card-img-top" src="<?= asset('storage/carteiras/carteira1.png')?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira2.png')?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira1.png')?>'">
                </figure>
               

                <div class="card-body">
                  <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                  <p class="vibes preco text-center fw-bold fs">R$ 50,00</p>
                  <p class="text-center">2x R$ 25,00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm black botao ">Comprar</button>
                    </div>
                    <small class="text-muted">RC - Couros</small>
                  </div>
                </div>
              </div>
            </div>
       </div>