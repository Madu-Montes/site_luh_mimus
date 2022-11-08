<?php
include'conn_banco.php';

if (isset($_POST['email']) || isset($_POST['senha'])){
    
    if(strlen($_POST['email']) == 0){
        echo"Prencha o campo email";

    }else if(strlen($_POST['senha']) == 0){
        echo"Prencha o campo senha";

    }else{

        $email = $sql->real_scape_string($_POST['email']);
        $senha = $sql->real_scape_string($_POST['senh']);

        $sql_logar = "SELECT * FROM User_Cdst_Site WHERE email_UserCdstSite = '$email' AND senha_UserCdstSite = '$senha'";
        $sql_query = $sql->query($sql_logar) or die("Falha na execução do código SQL: " . $sql->error);

        $qtd = $sql_query->num_rows;

        $if($qtd == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_UserCdstSite'] = $usuario['id_UserCdstSite'];
            $_SESSION['nome_UserCdstSite'] = $usuario['nome_UserCdstSite'];

            header(Location: painel.php);

        }else {
            echo"Falha ao logar! Email pu senha incorretos!";
        }

    }


}
?>