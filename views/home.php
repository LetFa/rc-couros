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
<div class="icones-grandes">
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
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top" src="<?= asset('storage/carteiras/carteira1.png') ?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira2.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira1.png') ?>'">
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

            <div class="col-lg-4">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top" src="<?= asset('storage/carteiras/carteira2.png') ?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira3.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira2.png') ?>'">
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
            <div class="col-lg-4">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top" src="<?= asset('storage/carteiras/carteira4.png') ?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira2.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira3.png') ?>'">
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
            <div class="col-lg-4">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top" src="<?= asset('storage/carteiras/carteira3.png') ?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira2.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira3.png') ?>'">
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
            <div class="col-lg-4">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top" src="<?= asset('storage/carteiras/carteira3.png') ?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira2.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira3.png') ?>'">
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
            <div class="col-lg-4">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top" src="<?= asset('storage/carteiras/carteira3.png') ?>" alt="Card image cap" onmouseover="this.src='<?= asset('storage/carteiras/carteira2.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira3.png') ?>'">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn-produtos vibes">Ver todos os produtos</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container area-icones">
    <div class="row">
        <div class="col-lg-3">
            <div class="text-center">

                <figure id="fig2">
                    <img src="<?= asset('storage/icones_grandes/carro1.png') ?>" onmouseover="this.src='<?= asset('storage/icones_grandes/carro.png') ?>'" onmouseout="this.src='<?= asset('storage/icones_grandes/carro1.png') ?>'" class="w-50" alt="">
                </figure>

                <div class="icones-texto">
                    <h5 class="vibes">Enviamos</h1>
                        <p>Para todos da região<br> de Birigui - SP</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="text-center">

                <figure id="fig4">
                    <img src="<?= asset('storage/icones_grandes/cartao1.png') ?>" onmouseover="this.src='<?= asset('storage/icones_grandes/cartao.png') ?>'" onmouseout="this.src='<?= asset('storage/icones_grandes/cartao1.png') ?>'" class="w-50" alt="">
                </figure>
                <div class="icones-texto2">
                    <h5 class="vibes">Formas de pagamentos</h1>
                        <p>Cartão<br> PIX e em dinheiro</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center">

                <figure id="fig2">
                    <img src="<?= asset('storage/icones_grandes/zap.png') ?>" onmouseover="this.src='<?= asset('storage/icones_grandes/zap1.png') ?>'" onmouseout="this.src='<?= asset('storage/icones_grandes/zap.png') ?>'" class="w-50" alt="">
                </figure>

                <div class="icones-texto2">
                    <h5 class="vibes">Dúvidas?</h1>
                        <p>Chamem<br>no Whatssap</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center">
                <figure id="fig2">
                    <img src="<?= asset('storage/icones_grandes/local.png') ?>" onmouseover="this.src='<?= asset('storage/icones_grandes/local1.png') ?>'" onmouseout="this.src='<?= asset('storage/icones_grandes/local.png') ?>'" class="w-50" alt="">
                </figure>

                <div class="icones-texto2">
                    <h5 class="vibes">Local</h1>
                        <p>R. Guarani - Jardim Sao Braz <br>Birigui - SP, 16202-001
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cinza titulo-global">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titulo-pul vibes fs">PULSEIRAS E ACESSÓRIOS</div>
        </div>
    </div>
</div>
    <div class="container">
                <div class="row">
                    <div class="col-md-5" data-aos="fade-right">
                        <img class="featurette-image img-fluid mx-auto" src="<?= asset('storage/slider/banner.png') ?>" alt="pulseiras">
                    </div>
                    <div class="col-md-7" data-aos="fade-left">
                        <h2 class="text-center vibes roxo mt-5 ">PULSEIRAS DE DIFRENTES MODELOS
                        </h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium in exercitationem cumque ut recusandae quo, facilis magni temporibus! Ad vero quisquam laborum quos ipsam laudantium fuga iusto praesentium blanditiis doloribus?</p>
                        <ul class="cms-metas">
                            <li><img  src="<?= asset('storage/seta3.png')?>" alt="">
                                Acessórios masculino e feminino</li>
                            <li><img  src="<?= asset('storage/seta3.png')?>" alt="">
                                Paletas de cores</li>
                            <li><img  src="<?= asset('storage/seta3.png')?>" alt="">
                                Temos diversos tipos de fios</li>
                            <li><img  src="<?= asset('storage/seta3.png')?>" alt="">
                                Outro parágrafo
                                 </li>
                            <li><img  src="<?= asset('storage/seta3.png')?>" alt="">
                                Segundo parágrafo </li>
                        </ul>
                        <div class="button-pul">
                            <button class="btn-pul vibes">VER PULSEIRAS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> 
    <div class="gtm-whatsFlutuante">
        <a target="_blank" href="">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="entre em contato conosco">
        </a>
    </div>