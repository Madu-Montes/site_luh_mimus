<?php

include 'conn_banco.php';

   

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dtn = $_POST['dtn'];
    $senha = $_POST['senha'];
    $avatar = $_FILES['avatar']['name'];
    $uploaddir = "avatar/";
    $separa =  explode(".", $avatar);
    $separa = array_reverse($separa);
    $tipo = $separa[0];
    $avatar_final = $cpf . '.' . $tipo;
    $avatar_UserCdstSite = $uploaddir . $avatar_final;
    unlink("../$avatar_UserCdstSite");

    $sql->query("UPDATE user_cdst_site SET avatar_UserCdstSite='$avatar_UserCdstSite' WHERE cpf_UserCdstSite = '$cpf' ");
    move_uploaded_file($_FILES['avatar']['tmp_name'],'../' .  $uploaddir . $avatar_final);
    

    $sql->query("UPDATE user_cdst_site SET nome_UserCdstSite='$nome', email_UserCdstSite='$email',
    dtn_UserCdstSite='$dtn', senha='$senha', celular='$celular' WHERE cpf= '$cpf' ");

    
    
    ?>