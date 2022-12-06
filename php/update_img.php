<?php

include'conn_banco.php';

$cpf = $_POST['cpf'];
$avatar = $_FILES['avatar']['name'];
$uploaddir = "Avatar/";
$separa =  explode(".", $avatar);
$separa = array_reverse($separa);
$tipo = $separa[0];
$avatar_final = $cpf . '.' . $tipo;
$avatarbd = $uploaddir . $avatar_final;
unlink("../$avatarbd");

$sql->query("UPDATE cliente SET avatar='$avatarbd' WHERE cpf = '$cpf' ");
move_uploaded_file($_FILES['avatar']['tmp_name'],'../' .  $uploaddir . $avatar_final);





?>