<?php

include'conn_banco.php';



if (isset($_POST['email']) || isset($_POST['senha'])){
    
    if(strlen($_POST['email']) == 0){
        echo"Prencha o campo email";

    }else if(strlen($_POST['password']) == 0){
        echo"Prencha o campo senha";

    }else{
        
        $login = $_POST['email'];
        $senha = $_POST['password'];

        $sql_logar = $sql->query("SELECT * FROM User_Cdst_Site WHERE email_UserCdstSite = '$login' AND senha_UserCdstSite = '$senha'");
        

        $qtd = $sql_logar->num_rows;

        if($qtd == 1){
        
            $usuario = $sql_logar->fetch_assoc();


            if(!isset($_SESSION)){
                session_start();
            }

            
            $_SESSION['email'] = $email;
            $_SESSION['login'] = $senha;

            header("Location: painel.php");

        }else {
            echo"Falha ao logar! Email ou senha incorretos!";
        }

    }


}
?>