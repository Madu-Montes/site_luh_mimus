<?php
session_start();
?>
<!--**
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar e Bootstrap 4,
 * o código é aberto e o uso é free, 
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 *-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/calendarioStyle.css">

        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/personalizado.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/responsive.css">
  <script defer src="../../js/app.js"></script>
    </head>
    <body>



        <?php  
        include '../headerlogged.php';
        ?>
        <br>
        <div class="header-menu">
      <nav class="navbar navbar-expand-sm navbar-light ">
        <div class="container">

          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 snip1143">
              <li class="nav-item">
                <a class="nav-link active" href="index.html" aria-current="page" data-hover="Home">Home<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./html/galeria.html" aria-current="page"
                  data-hover="Galeria">Galeria<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./html/quemsomos.html" aria-current="page" data-hover="Quem somos">Quem
                  somos<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./html/contato.html" aria-current="page"
                  data-hover="Contato">Contato<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="./html/produtos.html" id="dropdownId"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                  data-hover="Produtos">Produtos</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="./html/bolos.html" data-hover="Contato">Bolos</a>
                  <a class="dropdown-item" href=".html/doces.html" data-hover="Contato">Doces</a>
                  <a class="dropdown-item" href="./html/salgados.html" data-hover="Contato">Salgados</a>
                  <a class="dropdown-item" href="./html/personalizados.html" data-hover="Contato">Personalizados</a>
                  <a class="dropdown-item" href="./html/kitfesta.html" data-hover="Contato">Kit Festa</a>
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
    </div>
  </div>
        <br><br>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <br>
        <h1>Agende o dia da encomenda</h1>
        <br><br>
        <div id='calendar'></div>

        <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do Pedido</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <dl class="row">
                            <dt class="col-sm-3">ID do evento</dt>
                            <dd class="col-sm-9" id="id"></dd>

                            <dt class="col-sm-3">Título do evento</dt>
                            <dd class="col-sm-9" id="title"></dd>

                            <dt class="col-sm-3">Início do evento</dt>
                            <dd class="col-sm-9" id="start"></dd>

                            <dt class="col-sm-3">Fim do evento</dt>
                            <dd class="col-sm-9" id="end"></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-cad"></span>
                        <form id="addevent" method="POST" enctype="multipart/form-data" action="">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" value="Personalizado" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">		
                                        <option style="color:#32CD32;" value="#32CD32">Verde</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Início do evento</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Final do evento</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Reservar</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inror_box">
                                <img src="../../images/logorodade.png" alt="logo da confeitaria Luh Mimu's"
                                    id="logorodape">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inror_box">
                                <h3>Contato</h3>
                                <li>Telefone: 40028922</li>
                                <li>WhatsApp: 967800867</li>
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
                                    <a href="#">Voltar ao topo <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="14" fill="currentColor" class="bi bi-arrow-up-circle"
                                            viewBox="0 0 16 16">
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
                                <a class="btn" href="https://wa.me/5511990257616" target="_blank"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </body>
</html>
