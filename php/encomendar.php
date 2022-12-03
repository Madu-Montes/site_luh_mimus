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

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styleencomendar.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="container-fluid">
    <!--start header-->
    <?php
    include '../includes/header.php';
    ?>

    <!--start menu-->
    <?php
    include '../includes/menu.php';
    ?>

    <br><br>
    <!--start menu-->
    <?php
    include '../includes/formEncomendas.php';
    ?>

    <br><br>

    <!--start footer-->
    <?php
    include '../includes/footer.php';
    ?>



  </div>
  </div>

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
$tema = $_POST['tema'];
$img = $_FILES['referencia']['name'];
$uploaddir = "..\img_encomendas";
$separa = explode(".", $img);
$separa = array_reverse($separa);
$tipoa = $separa[0];
$imgrf = $peso . '.' . $tipoa;

$testar = $sql->query("SELECT * FROM encomenda WHERE qtd_encomenda = '$peso'");
$check = mysqli_num_rows($testar);

if ($check == 1) {
  header('location: ../pagamento/checkout.php');
} else {
  move_uploaded_file($_FILES["referencia"]["tmp_name"], "../" . $uploaddir .
    $imgrf);

  $imgbd = $uploaddir . $imgrf;

  $sql->query("INSERT INTO encomendas(id_encomenda, id_anuncios, qtd_encomenda, tema_encomendas, img_encomenda) VALUES
        (NULL, NULL,'$peso','$tema','$imgbd')");

  echo "Salvo";
  echo $peso;
  echo $tema;
  echo $imgbd;
}

?>