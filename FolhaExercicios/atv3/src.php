<?php

    $valor1 = $_POST['valor'];

    $metragem = $valor1 * $valor1;
    echo "A área do quadrado de lado $valor1 é: " . $metragem . " m²";
?>