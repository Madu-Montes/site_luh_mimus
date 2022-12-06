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

            
            /* $_SESSION['email'] = $email;
            $_SESSION['login'] = $senha; */

            $_SESSION['id'] = $usuario['id_UserCdstSite'];
            $_SESSION['nome'] = $usuario['nome_UserCdstSite'];
            $_SESSION['email'] = $usuario['email_UserCdstSite'];
            $_SESSION['cpf'] = $usuario['cpf_UserCdstSite'];
            $_SESSION['dtn'] = $usuario['dtn_UserCdstSite'];
            $_SESSION['celular'] = $usuario['celular_UserCdstSite'];
            $_SESSION['senha'] = $usuario['senha_UserCdstSite'];
          




            header("Location: iniciologged.php");

        }else {
            
            header("Location: notuser.php");
        }

    }


}
?>