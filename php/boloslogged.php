<?php

if(!isset($_SESSION)){
    session_start();
}


?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <title>Bolos | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/stylecardapio.css">
  <link rel="stylesheet" href="../css/responsive.css">
  

</head>

<body>
<div class="container-fluid">
    <!--start header-->
    
    <?php  include '../includes/headerlogged.php';?>

    <!--start menu-->
    <div class="header-menu">
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 snip1143">
              <li class="nav-item">
                <a class="nav-link active" href="iniciologged.php" aria-current="page">Home<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="galerialogged.php" aria-current="page">Galeria<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="quemsomoslogged.php" aria-current="page">Quem somos<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contatologged.php" aria-current="page">Contato<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Produtos</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="boloslogged.php">Bolos</a>
                  <a class="dropdown-item" href="doceslogged.php">Doces</a>
                  <a class="dropdown-item" href="salgadoslogged.php">Salgados</a>
                  <a class="dropdown-item" href="personalizadoslogged.php">Personalizados</a>
                  <a class="dropdown-item" href="kitfestalogged.php">Kit Festa</a>
                </div>
              </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
              <input class="form-control me-sm-2" type="text" placeholder="O que você procura?">
              <button class="btn btn-outline my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></button>
            </form>
          </div>
        </div>
      </nav>
      <div class="topo-galeria container">
        <i><img src="../images/bolobanner.png" width="100%"></i>
        <!--banner-->
      </div>
    </div>
  </div>
  <!--end header-->
<!--modal-->
  <div class="modal fade" id="productView" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolobrig.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolobrig.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de brigadeiro</h2>
                <p class="text-muted">R$49,90</p>
                <p class="text-sm mb-4">Bolo recheado com brigadeiro de chocolate 50% cacau. O preço acima é equivalente á um kg de bolo de brigadeiro.</p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart cart27" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolopresti.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolopresti.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">

                </ul>
                <h2 class="h4">Bolo de prestígio</h2>
                <p class="text-muted">RS49,90</p>
                <p class="text-sm mb-4">Bolo recheado com leite condensado e coco. O preço acima é equivalente á um kg de bolo do sabor de prestígio.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView3" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolodocel.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolodocel.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de doce de leite</h2>
                <p class="text-muted">RS49,90</p>
                <p class="text-sm mb-4">Bolo recheado com doce de leite. O preço acima é equivalente á um kg de bolo do sabor de doce de leite.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView4" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolosensacao.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolosensacao.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de Sensação (Morango e chocolate)</h2>
                <p class="text-muted">RS49,90</p>
                <p class="text-sm mb-4">Bolo com recheio de brigadeiro de morangos. O preço acima é equivalente á um kg de bolo do sabor sensação.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView5" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloninho.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloninho.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo mousse de chocolate branco</h2>
                <p class="text-muted">RS49,90</p>
                <p class="text-sm mb-4">Bolo recheado com mousse de chocolate branco. O preço acima é equivalente á um kg de bolo de mousse de chocolate branco.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView6" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolomousse.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolomousse.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de mousse de chocolate 50%</h2>
                <p class="text-muted">RS49,90</p>
                <p class="text-sm mb-4">Bolo recheado com mousse de chocolate 50% cacau. O preço acima é equivalente á um kg de bolo do sabor de mousse de chocolate 50%.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView7" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolobrigm.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolobrigm.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de brigadeiro com morango</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com brigadeiro de chocolate e morangos. O preço acima é equivalente á um kg de bolo do sabor de brigadeiro com morangos.</p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView8" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloninho.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloninho.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de ninho trufado</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com creme de leite Ninho trufado. O preço acima é equivalente á um kg de bolo do sabor de ninho trufado.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView9" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolochurros.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolochurros.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de churros</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com doce de leite. O preço acima é equivalente á um kg de bolo do sabor de prestígio.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView10" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloninhomoran.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloabacaxi.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de Ninho com abacaxi</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com ninho e pedaços de abacaxi. O preço acima é equivalente á um kg de bolo do sabor de ninho com abacaxi
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView11" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloninhomoran.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloninhomoran.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de ninho com morango</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com leite Ninho e pedaços de morango. O preço acima é equivalente á um kg de bolo do sabor ninho com morangos.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView12" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolococoaba.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolococoaba.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de creme de coco com abacaxi</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com creme de coco e pedaços de abacaxi. O preço acima é equivalente á um kg de bolo do sabor de creme de coco com abacaxi.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView13" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolomara.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolomara.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de brigadeiro de maracujá trufado</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com maracuja e brigadeiro.  O preço acima é equivalente á um kg de bolo do sabor de brigadeiro de maracujá trufado.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView14" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloamend.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloamend.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de brigadeiro com amendoim</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com brigadeiro e amendoim. O preço acima é equivalente á um kg de bolo do sabor de brigadeiro com amendoim.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView15" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloameixa.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloameixa.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo doce de leite com ameixa</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado doce de leite e pedaços de ameixa. O preço acima é equivalente á um kg de bolo do sabor de doce de leite com ameixa.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView16" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolodoceabacax.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolodoceabacax.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de doce de leite com abacaxi</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com doce de leite e pedaços de abacaxi. O preço acima é equivalente á um kg de bolo do sabor de doce de leite com abacaxi.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView17" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolodoisamor.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolodoisamor.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de dois amores</h2>
                <p class="text-muted">RS59,00</p>
                <p class="text-sm mb-4">Bolo recheado com creme de chocolate branco e chocolate ao leite. O preço acima é equivalente á um kg de bolo do sabor de prestígio.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="productView18" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolocafe.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolocafe.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de café com chocolate</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo recheado com ganache de chocolate com café. O preço acima é equivalente á um kg de bolo do sabor de café com chocolate.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView19" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolonozes.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolonozes.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo trufado de nozes com avelã</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo recheado com chocolate trufado de nozes e avelã. O preço acima é equivalente á um kg de bolo do sabor de trufado de nozes com avelã.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView20" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloamend.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloamend.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de Ferrero Rocher</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo recheado com ganache de chocolate Ferrero Rocher. O preço acima é equivalente á um kg de bolo do sabor de Ferrero Rocher.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView21" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bologeleiamor.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bologeleiamor.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de ninho com geleia de morango</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo recheado com creme de Ninho e geleia de morango. O preço acima é equivalente á um kg de bolo do sabor de ninho com geleia de morango.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView22" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/boloninhomara.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/boloninhomara.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de ninho com geleia de maracuja</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo recheado com creme de Ninho e geleia de maracuja. O preço acima é equivalente á um kg de bolo do sabor de ninho com geleia de maracuja.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView23" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolosurpresauva.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolosurpresauva.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de surpresa de uva</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo com massa de chocolate/branca, recheado com creme de Ninho e pedaços de uva. O preço acima é equivalente á um kg de bolo do sabor de surpresa de uva.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView24" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolosurpresamor.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolosurpresamor.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de surpresa de morango</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo com massa de chocolate/branca, recheado com creme de Ninho e pedaços de morango. O preço acima é equivalente á um kg de bolo do sabor de surpresa de morango.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView25" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bolopacoca.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bolopacoca.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de paçoca e ganache</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo com massa de chocolate/branca, recheado com ganache de chocolate e paçoca. O preço acima é equivalente á um kg de bolo do sabor paçoca e ganache.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="productView26" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content overflow-hidden border-0">
        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="../images/produtos/bololimao.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch"> <img src="../images/produtos/bololimao.png" alt="" width="450px"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
            <div class="col-lg-6">
              <div class="p-4 my-md-4">
                <ul class="list-inline mb-2">
                
                </ul>
                <h2 class="h4">Bolo de creme de limão</h2>
                <p class="text-muted">RS69,00</p>
                <p class="text-sm mb-4">Bolo com massa de chocolate/branca, recheado com ganache creme de limão. O preço acima é equivalente á um kg de bolo do sabor creme de limão.
                 </p>
                 <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de antecendência. </p>
                        <p class=" text-sm mb-0">Para escolher sua decoração, realize a encomenda do produto e faça uma descrição.</p>
                        <br>
                <div class="row align-items-stretch mb-4 gx-0">
                  <div class="col-sm-7">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                      <div class="quantity">
                        <input class="form-control border-0 shadow-0 p-0" type="number" value="1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="loginpersonalizado.html">Encomendar</a></div>
                </div><a class="btn btn-link text-dark text-decoration-none p-0 add-cart" href="#!"><i class="far fa-heart me-2"></i>Favoritar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cardapio">
    <!--início da sessão de bolos-->
    <div class="bolos">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="title">
              <h1 class="mb-3">BOLOS</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel active_course owl-loaded owl-drag ">
              <div class="owl-stage-outer">
                <div class="owl-item active product-overlay" style="width: 330px; ">
                  <div class="single_course">
                    <div class="course_head">
                      
                     <a href="#productView" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/bolobrig.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$49,90</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView" data-bs-toggle="modal">Brigadeiro</a>
                      </h4>
                      Bolo de chocolate rechado com brigadeiro 50% cacau. Pedido com 5 dias de antecedencia.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart10" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView2" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/bolopresti.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$49,90</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView2" data-bs-toggle="modal">Prestígio</a>
                      </h4>
                      <p>
                        Bolo com massa branca, recheado com beijinho. A cobertura é de chocolate com coco
                        polvilhado.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart11" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                     <a href="#productView3" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolodocel.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$49,90</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView3" data-bs-toggle="modal">Doce de leite</a>
                      </h4>
                      <p>
                        Bolo com massa branca, recheado com doce de leite. A cobertura é de caramelo.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart12" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView4" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolosensacao.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$49,90</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView4" data-bs-toggle="modal">Sensação (Morango e chocolate)</a>
                      </h4>
                      <p>Bolo de chocolate rechado com brigadeiro e morangos.</p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>

                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart13" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView5" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloninho.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$49,90</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView5" data-bs-toggle="modal">Mousse de chocolate branco</a>
                      </h4>
                      <p>
                        Bolo recheado com mousse de chocolate branco.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart14" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView6" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolomousse.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$49,90</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView6" data-bs-toggle="modal">Mousse de chocolate 50%</a>
                      </h4>
                      <p>
                        Bolo recheado com mousse de chocolate meio amargo.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart15" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!--início da sessão de bolos semi especiais-->

                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView7" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolobrigm.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView7" data-bs-toggle="modal">Brigadeiro com morango</a>
                      </h4>
                      <p>
                        Bolo com massa de chocolate e recheio de brigadeiro e morango.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart16" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView8" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloninho.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView8" data-bs-toggle="modal">Ninho Trufado</a>
                      </h4>
                      <p>
                        Bolo de massa branca e recheado com creme de Ninho (leite em pó) trufado.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>

                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart17" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView9" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolochurros.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView9" data-bs-toggle="modal">Churros</a>
                      </h4>
                      <p>
                        Bolo com massa de chocolate, recheado com doce de leite.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <br>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart18" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView10" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloabacaxi.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView10" data-bs-toggle="modal">Ninho com Abacaxi </a>
                      </h4>
                      <p>
                        Bolo com massa de chocalate, recheado com brigadeiro e morangos.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart19" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView11" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloninhomoran.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView11" data-bs-toggle="modal">Ninho com morango</a>
                      </h4>
                      <p>
                        Bolo com massa branca, recheado com mousse de chocolate branco.

                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart20" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView12" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolococoaba.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView12" data-bs-toggle="modal">Creme de coco com abacaxi</a>
                      </h4>
                      <p>
                        Bolo com massa de chocolate, recheado com mousse de chocolate
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart21" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView13" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolomara.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView13" data-bs-toggle="modal">Brigadeiro de Maracujá Trufado</a>
                      </h4>
                      <p>
                        Bolo com recheio de maracujá trufado de chocolate.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart22" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView14" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloamend.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView14" data-bs-toggle="modal">Brigadeiro com Amendoim</a>
                      </h4>
                      <p>
                        Bolo com recheio de amendoin e brigadeiro de chocolate.

                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart23" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView15" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloameixa.png" alt=""></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView15" data-bs-toggle="modal">Doce de leite com Ameixa</a>
                      </h4>
                      <p>
                        Bolo recheado com doce de leite e ameixa.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart24" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView16" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolodoceabacax.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView16" data-bs-toggle="modal">Doce de leite com Abacaxi</a>
                      </h4>
                      <p>
                        Bolo com recheio de doce de leite e abacaxi.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart25" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView17" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolodoisamor.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView17" data-bs-toggle="modal">Dois Amores</a>
                      </h4>
                      <p>
                        Bolo com recheio de chocolate branco e chocolate ao leite.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart26" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!--início da sessão de bolos especiais-->

                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView18" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolocafe.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView18" data-bs-toggle="modal">Café com Chocolate</a>
                      </h4>
                      <p>
                        Bolo de chocolate com recheio de chocolate meio amargo e café.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart27" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView19" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bolonozes.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView19" data-bs-toggle="modal">Trufado de Nozes com Avelã</a>
                      </h4>
                      <p>
                        Bolo com massa branca, recheado com mousse de chocolate branco.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart28" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView20" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/boloamend.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 59</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a href="#">Trufado de Ferrero Rocher</a>
                      </h4>
                      <p>
                        Bolo recheado com mousse de chocolate meio amargo.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart29" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView21" data-bs-toggle="modal">  <img class="img-fluid" src="../images/produtos/bologeleiamor.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView21" data-bs-toggle="modal">Ninho com Geleia de Morango</a>
                      </h4>
                      <p>
                        Bolo recheado com brigadeiro e morangos.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart30" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView22" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/boloninhomara.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView22" data-bs-toggle="modal">Ninho com Geleia de Maracujá</a>
                      </h4>
                      <p>
                        Bolo com massa branca, recheado com mousse de chocolate branco.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart31" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView23" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/bolosurpresauva.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView23" data-bs-toggle="modal">Surpresa de Uva</a>
                      </h4>
                      <p>
                        Bolo com massa de chocolate, recheado com mousse de chocolate meio amargo.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart32" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <h6>luhmimus</h6>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView24" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/bolosurpresamor.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView24" data-bs-toggle="modal">Surpresa de Morango</a>
                      </h4>
                      <p>
                        Bolo com massa de chocalate, recheado com brigadeiro e morangos.
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart33" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      <a href="#productView25" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/bolopacoca.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView25" data-bs-toggle="modal">Paçoca e Ganache</a>
                      </h4>
                      <p>
                        Bolo crecheado com paçoca e chocolate. A cobertura é de ganache de chocolate meio amargo.

                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart34" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 330px;">
                  <div class="single_course">
                    <div class="course_head">
                      
                      <a href="#productView26" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos/bololimao.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 69</span>
                      <span class="tag mb-4 d-inline-block">o quilo</span>
                      <h4 class="mb-3">
                        <a  href="#productView26" data-bs-toggle="modal" >Creme de Limão</a>
                      </h4>
                      <p>
                        Bolo com massa de chocolate, recheado com mousse de chocolate meio amargo. A cobertura é de
                        chocolate.
                      </p>
                      <div
                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="mt-lg-0 mt-3">
                        </div>
                      </div>
                      <div class="btns-cardapio">
                        <a class="btn btn-outline-dark" href="loginpersonalizado.html" role="button">Encomendar</a>
                      </div>
                      <div class="btn_fav">
                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart35" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    <!--start footer-->
    <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="inror_box">
              <img src="../images/logorodade.png" alt="logo da confeitaria Luh Mimu's" id="logorodape">
            </div>
          </div>
          <div class="col-md-3">
            <div class="inror_box">
              <h3>Contato</h3>
              <li>WhatsApp: (11) 9 90257616</li>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inror_box">
              <h3>Localização</h3>
              <li>R. Sebastião Amâncio Pinto</li>
              <li>Jardim São Luís</li>
              <li>São Paulo-SP</li>
              <li>05813-090</li>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inror_box">
              <h3>Horário de Funcionamento</h3>
              <li>seg.: 11:00 – 20:30</li>
              <li>ter.: 11:00 – 20:30</li>
              <li>qua.: 11:00 – 20:30</li>
              <li>qui.: 11:00 – 20:30</li>
              <li>sex.: 11:00 – 20:30</li>
              <li>sab.: 11:00 – 20:00</li>
              <li>dom.: Fechado</li>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="voltartopo">
                <a href="#">Voltar ao topo <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                    fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                  </svg></a>
              </div>
              <p>© Copyright 2022 - Luh Mimu’s Confeitaria<a href="https://html.design/"></a></p>
              <p><a class="politica" href="politica.html">Política de privacidade</a></p>

              <a class="btn" href="https://www.instagram.com/luhmimus/" target="_blank"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn" href="https://www.facebook.com/luhmimuss" target="_blank"><i
                  class="fab fa-facebook"></i></a>
              <a class="btn" href="https://www.tiktok.com/@luhmimus?is_from_webapp=1&sender_device=pc"
                target="_blank"><i class="fab fa-tiktok"></i></a>
              <a class="btn" href="https://wa.me/5511990257616" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
  </footer>
  <!--end footer-->

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </div>
</body>

</html>