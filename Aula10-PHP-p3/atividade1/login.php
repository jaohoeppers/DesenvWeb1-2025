<?php

    session_start();

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['inicio_sessao'] = date("d/m/y h:i:s");
    $_SESSION['ultimo_acesso'] = date("d/m/y h:i:s");
    setcookie("usuario",$_SESSION['user'],time() + 86400 * 30, "/");
    setcookie("tempo",time(),time() + 86400 * 30, "/");

    echo('<a href="acesso.php"> Sua sessão foi logada com sucesso clique aqui para acessar</a>');

?>