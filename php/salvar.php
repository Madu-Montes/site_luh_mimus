<?php
     include'conn_banco.php';
     
     $cpf = $_POST['cpf'];
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $dtn = $_POST['datanasc'];
     $senha = $_POST['senha'];
     $celular = $_POST['celular'];
     
     $testar = $sql->query("SELECT * FROM User_Cdst_Site WHERE cpf_UserCdstSite = '$cpf'");
     $check = mysqli_num_rows($testar);
 
     if ($check == 1){
         echo "Usuário Cadastrado";
     }else{
         
         $sql->query("INSERT INTO User_Cdst_Site(cpf_UserCdstSite, nome_UserCdstSite, email_UserCdstSite, dtn_UserCdstSite, celular_UserCdstSite, senha_UserCdstSite) VALUES
         ('$cpf','$nome','$email','$dtn','$celular','$senha')");
 
     }
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Salvos</title>
 </head>
 <body>
    <h1>Parabéns seus dados foram salvos!!</h1>
 </body>
 </html>