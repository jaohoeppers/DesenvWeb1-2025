<?php

    // inicia a sessão
    session_start();

    if(!isset($_SESSION['usuario'])){
        $_SESSION['usuario'] = 'userTeste';

        echo "Sessão iniciada";
        echo '<a href="session_continua.php"> Continuar </a>';
    }else{
        echo "Sua sessão já esta iniciada :" . session_id();
        echo '<a href="session_continua.php"> Continuar </a>';
    }

?>