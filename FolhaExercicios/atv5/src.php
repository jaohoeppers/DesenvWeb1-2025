<?php

    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $metragem = ($base * $altura) / 2;

    echo "<h3>A área do triângulo de base $base e altura $altura é: " . $metragem . " m²</h3>";
?>