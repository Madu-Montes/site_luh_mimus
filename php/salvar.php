<?php

     //Salvar cadastro com validação 

     include'conn_banco.php';
     
     $cpf = $_POST['cpf'];
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $dtn = $_POST['datanasc'];
     $senha = $_POST['senha'];
     $celular = $_POST['celular'];
     
     $testar = $sql->query("SELECT * FROM User_Cdst_Site WHERE cpf_UserCdstSite = '$cpf'");

     $check = mysqli_num_rows($testar);
 
     if ($check != 0){

        echo "<h4><center><font color='white'>CPF $cpf já está cadastrado.</font></center></h4>";
        echo "<a href='../HTML/login.html'><button type='button'><span></span>TENTE NOVAMENTE</button></a>";

     }else{
         
         $sql->query("INSERT INTO User_Cdst_Site(cpf_UserCdstSite, nome_UserCdstSite, email_UserCdstSite, dtn_UserCdstSite, celular_UserCdstSite, senha_UserCdstSite) VALUES
         ('$cpf','$nome','$email','$dtn','$celular','$senha')");


        echo "<h4><center><font color='white'>Cadastro realizado com sucesso!</font></center></h4>";
        echo "<a href='../HTML/login.html'><center><button type='button'></center><span></span>LOGIN</button></a>";
 
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


 <style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;

    background-color: #B0BEC5;
    background-repeat: no-repeat;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px;
    margin-top: 46px;

}

.back{
    padding: 40px;
    color: #000;
}

.back:hover{
    color: #FCCAD5;
}

.botaovolta{
    margin-top: 30px;
    margin-bottom: -30px;
}

.card2 {
    margin: 0px 40px;
}

.logo {
    width: 100px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px;
}

.image {
    width: 380px;
    height: 360px;
}

.border-line {
    border-right: 1px solid #EEEEEE;
}

.googleapis {
    background-color:  #FCCAD5;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
}


.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px;
}

.or {
    width: 10%;
    font-weight: bold;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input, textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid  #FCCAD5;
    outline-width: 0;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

a {
    color:  #FCCAD5;
    cursor: pointer;
}



.btn-blue {
    
    width: 150px;
    
    
    
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer;
}

.bg-blue {
    color: #fff;
    background-color: black;
}

@media screen and (max-width: 991px) {
    
    body{
         overflow-x: hidden;
    }
    
    .logo {
        margin-left: 30px;
    }

    .image {
        width: 300px;
        height: 220px;
    }

    .border-line {
        border-right: none;
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px;
    }
}

</style>
