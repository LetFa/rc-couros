<?php $this->layout('components/_theme') ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= asset('storage/slider/teste.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= asset('storage/slider/teste.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= asset('storage/slider/teste.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="icones-grandes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 texto">Nossas Carteiras</h1>
            </div>
            
            <div class="col-lg-4 mt-5">
                <h1 class="text-center fs">Materias sustentáveis</h1>
                <p class="text-center">Nossos tecidos são produzidos <br> com o menor impacto ambiental possível.<br> Sem origem animal.</p>
            </div>
            <div class="col-lg-4 mt-5">
                <h1 class="text-center  fs">Feito á mão</h1>
                <p class="text-center ">Valorizamos a mão de obra <br> e contribuímos para o aumento da <br> economia local.</p>
            </div>
            <div class="col-lg-4 mt-5">
                <h1 class="text-center  fs">Modo Atemporal</h1>
                <p class="text-center">Qualidade e design duradouros.<br> Para todos os corpos<br> e gêneros.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="texto text-center mt-5" >Mais vendidos</div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car" src="<?= asset('storage/carteiras/carteira1.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car1" src="<?= asset('storage/carteiras/carteira2.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark ">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car2" src="<?= asset('storage/carteiras/carteira3.png') ?>" onmouseover="this.src='<?= asset('storage/carteiras/teste1.png') ?>'" onmouseout="this.src='<?= asset('storage/carteiras/carteira3.png') ?>'">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car3" src="<?= asset('storage/carteiras/carteira4.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class=" text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car3" src="<?= asset('storage/carteiras/carteira4.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car3" src="<?= asset('storage/carteiras/carteira4.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car3" src="<?= asset('storage/carteiras/carteira4.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                            <small class="text-muted">RC - Couros</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card mb-4  carteira">

                    <figure id="fig1">
                        <img class="card-img-top img-car3" src="<?= asset('storage/carteiras/carteira4.png') ?>">
                    </figure>

                    <div class="card-body">
                        <p class="card-text text-center vibes fs">Lançamento carteira masculina</p>
                        <p class="text-center fw-bold fs">R$ 50,00</p>
                        <p class="text-center text-danger">2x R$ 25,00</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Comprar</button>
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
                    <a href="#" title="Veja mais..." class="btn1 btn-balao-float-bottom"> <i class="icon icon-angle-down"></i> Veja mais...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container area-icones" data-aos="fade-up">
    <div class="row">
        <div class="col-lg-3">
            <div class="text-center">
            <i class="bi bi-bag-check"></i>
                <div class="icones-texto2">
                    <h5 class="vibes">Enviamos</h1>
                        <p>Para todos da região<br> de Birigui - SP</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="text-center">
            <i class="bi bi-credit-card"></i>
                <div class="icones-texto2">
                    <h5 class="vibes">Formas de pagamentos</h1>
                        <p>Cartão<br> PIX e em dinheiro</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center">
            <i class="bi bi-whatsapp"></i>
                <div class="icones-texto2">
                    <h5 class="vibes">Dúvidas?</h1>
                        <p>Chamem<br>no Whatssap</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center">
            <i class="bi bi-geo-alt-fill"></i>
                <div class="icones-texto2">
                    <h5 class="vibes">Local</h1>
                        <p>R. Guarani - Jardim Sao Braz <br>Birigui - SP, 16202-001
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cinza">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-5 fs">PULSEIRAS E ACESSÓRIOS</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5" data-aos="fade-right">
                <img class="featurette-image img-fluid mx-auto" src="<?= asset('storage/slider/banner.png') ?>" alt="pulseiras">
            </div>
            <div class="col-md-7">
                <h2 class="text-center titulo-corrente mt-5 ">PULSEIRAS DE DIFRENTES MODELOS
                </h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium in exercitationem cumque ut recusandae quo, facilis magni temporibus! Ad vero quisquam laborum quos ipsam laudantium fuga iusto praesentium blanditiis doloribus?</p>
                <ul class="cms-metas">
                    <li>
                        <i class="bi bi-patch-check-fill"></i>
                        Acessórios masculino e feminino
                    </li>
                    <li>
                        <i class="bi bi-patch-check-fill"></i>
                        Paletas de cores
                    </li>
                    <li>
                        <i class="bi bi-patch-check-fill"></i>
                        Temos diversos tipos de fios
                    </li>
                    <li>
                        <i class="bi bi-patch-check-fill"></i>
                        Outro parágrafo
                    </li>
                    <li>
                        <i class="bi bi-patch-check-fill"></i>
                        Segundo parágrafo 
                    </li>
                </ul>
                <div class="button-pul">
                    <a href="#" title="Veja mais..." class="btn2 btn-balao-float-left vibes"> <i class="icon icon-comments"></i> Ver pulseiras</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-7">
            <h2 class="text-center  mt-5 titulo-corrente">CORRENTES DE DIFRENTES MODELOS
            </h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium in exercitationem cumque ut recusandae quo, facilis magni temporibus! Ad vero quisquam laborum quos ipsam laudantium fuga iusto praesentium blanditiis doloribus?</p>
            <ul class="cms-metas">
                <li>
                    <i class="bi bi-patch-check-fill"></i>
                    Correntes masculino e feminino
                </li>
                <li>
                    <i class="bi bi-patch-check-fill"></i>
                    Paletas de pingentes
                </li>
                <li>
                    <i class="bi bi-patch-check-fill"></i>
                    Temos diversos tipos de fios
                </li>
                <li>
                    <i class="bi bi-patch-check-fill"></i>
                    Correntes em couro de diversas cores
                </li>
                <li>
                   <i class="bi bi-patch-check-fill"></i>
                    Segundo parágrafo 
                </li>
            </ul>
            <div class="button-pul">
                <a href="#" class="btnn vibes btn-balao-float-right"> <i class="icon icon-comment"></i> Ver correntes</a>
            </div>

        </div>
        <div class="col-md-5" data-aos="fade-left">
            <img class="featurette-image img-fluid mx-auto" src="<?= asset('storage/slider/banner2.png') ?>" alt="pulseiras">
        </div>
    </div>
</div>
</div>
</div>

<div class="titulo-global1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Receba todas as promoções</h1>
                <P class="text-center">Quer receber as nossas ofertas? Cadastre-se e comece a recebê-las!</P>
                <div class="btn-enviar">
                    <input type="email" name="email" senha="email" placeholder="Email" class="form-control w-50" style="margin: auto;border-radius:20px;">
                    <div class="text-center mt-3" style="padding-bottom:1rem;">
                        <button class="btn btn-dark">Enviar</button>
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
</div>