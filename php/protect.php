<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION)){
        die("Você não está logado.<p><a href=\"../html/login.html\">Entrar</a><p/>");
    }

?>