<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <title>Encomendar | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="../includes/calendario/js/personalizado.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styleencomendar.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="../css/login2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

   <br>
   <br>
   <h1 style="text-align: center; color: #ffb8c4;">Encomenda - Passo à Passo</h1>

<form class="form-tot" method="POST" enctype="multipart/form-data" id="addevent">

  <form action="../php/encomendar.php" method="POST">
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
      <div class="card card0 border-0">
        <div class="row d-flex">
          <div class="col-lg-6">
            <div class="card1 pb-5">
              <label for="messageReche" class="formbold-form-label" style="text-align: center;">
                Data para entregar a encomenda
              </label>

              <div class="scroll-escondido">
                <iframe src="../includes/calendario/calendario.php" name="janela" id="frame-spec"></iframe>
              </div>

              </iframe>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card21 card border-0 px-4 py-5" id="forcarBaixo">

              <div class="row px-3">
                <label for="qusOne" class="formbold-form-label" style="font-size: 20px; color: black;">
                  1º Passo - Quantidade
                </label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      1KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      2KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      3KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      4Kg
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row px-3">
                <label for="qusTwo" class="formbold-form-label" style="font-size: 20px; color: black;">
                  2º Passo - Massa
                </label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="massa" id="qusTwo" />
                      Chocolate
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="massa" id="qusTwo" />
                      Baunilha
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>

              </div>
            
              <div class="row px-3">
                <label class="formbold-form-label-2" for="messageTema" style="font-size: 20px; color: black;">
                  4º Passo - Tema
                </label>

                <div class="drag-area" ondrop="upload_file(event)" ondragover="return false" style="margin-bottom: 20px;">

                  <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                  <header>Arrastar Arquivo</header>
                  <span>ou</span>
                  <br>
                  <label for="file">Procurar Arquivo</label>
                  <button hidden>Browse File</button>
                  <input type="file" name="file" id="file" hidden accesskey="i">

                </div>
                <br>
                <textarea rows="6" name="message" id="messageReche" class="formbold-form-input" placeholder="Descreva o Tema"></textarea>
                <script src="../js/uloadoimg.js"></script>
              </div>
              <br>
              <div class="row px-3">
                <label for="opcOne" class="formbold-form-label" style="font-size: 20px; color: black;">
                  5º Passo - Adicionais
                </label>

                <div class="formbold-radio-flex" style="display: block;">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="checkbox" name="add" id="opcOne" />
                      Chantininho - Chantilly Leite Ninho
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group" style="display: block;">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="checkbox" name="add" id="opcTwo" />
                      Bolo no acetato
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group" style="display: block;">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="checkbox" name="add" id="opcThree" />
                      Ganache
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row mb-3 px-3">
                <button type="submit" class="formbold-btn add-cart" id="CadEvent">Prosseguir</button>
              </div>

            </div>
          </div>

        </div>

        <div class="bg-blue py-4">
          <div class="row px-3">
            <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. Luh Mimu’s.</small>
            <div class="social-contact ml-4 ml-sm-auto">
              <span class="fa fa-facebook mr-4 text-sm"></span>
              <span class="fa fa-instagram mr-4 text-sm"></span>
              <span class="fa fa-whatsapp mr-4 mr-sm-5 text-sm"></span>
            </div>
          </div>
        </div>
      </div>
</form>
  </form>

</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="../js/main2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</html>

<?php
include 'conn_banco.php';

$peso = $_POST['peso'];
$massa = $_POST['massa'];
$tema = $_POST['tema'];
$img = $_FILES['referencia']['name'];
$uploaddir = "..\img_encomendas";
$separa = explode(".", $img);
$separa = array_reverse($separa);
$tipoa = $separa[0];
$imgrf = $peso . '.' . $tipoa;
$add = $_POST['add'];

$testar = $sql->query("SELECT * FROM encomenda WHERE qtd_encomenda = '$peso'");
$check = mysqli_num_rows($testar);

if ($check == 1) {
  header('location: ../pagamento/checkout.php');
} else {
  move_uploaded_file($_FILES["referencia"]["tmp_name"], "../" . $uploaddir .
    $imgrf);

  $imgbd = $uploaddir . $imgrf;

  $sql->query("INSERT INTO encomendas(id_encomenda, id_anuncios, qtd_encomenda, massa_encomendas, tema_encomendas, img_encomenda) VALUES
        (NULL, NULL,'$peso', '$massa', '$tema','$imgbd')");

  echo "Salvo";
  echo $peso;
  echo $tema;
  echo $imgbd;
}

?>