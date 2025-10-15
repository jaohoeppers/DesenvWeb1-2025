<?php

    $valor1 = $_POST['valor'];

    if ($valor1 % 2 == 0) {
        echo "Valor divisível por 2";
    } else {
        echo "O valor não é divisível por 2";

    }
?>