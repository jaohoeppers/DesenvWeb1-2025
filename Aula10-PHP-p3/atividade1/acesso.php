<?php

    session_start();

    if(isset($_SESSION['user'])){

        $_SESSION['ultimo_acesso'] = date("d/m/y h:i:s");
        $_SESSION['tempo_sessao'] = strtotime($_SESSION['ultimo_acesso']) - strtotime($_SESSION['inicio_sessao']);

        if(!isset($_COOKIE['usuario']) || !isset($_COOKIE['tempo'])){
            session_destroy();
            echo '<script>alert("Cookies não estão definidos"); window.location.href = "login.html";</script>';
        }else{

            if($_SESSION['tempo_sessao'] > 10){
                session_destroy();
            }else{

                echo('Usuario:' . $_SESSION['user'] . '<br>');
                echo('Senha:' . $_SESSION['password'] . '<br>');
                echo('Inicio de Sessão:' . $_SESSION['inicio_sessao'] . '<br>');
                echo('Ultimo Acesso:' . $_SESSION['ultimo_acesso'] . '<br>');
                echo('Tempo de Sessão:' . $_SESSION['tempo_sessao'] . '<br>');
            }
        }
    }else{
        echo('<a href="login.html"> Sua sessão foi deslogada clique aqui para fazer login novamente</a>');
    }


?>