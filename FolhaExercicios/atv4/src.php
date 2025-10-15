<?php

    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];

    $metragem = $lado1 * $lado2;

    if($metragem > 10){
        echo "<h3>A área do retângulo de lados $lado1 e $lado2 é: " . $metragem . " m²</h3>";
    }else{
        echo "<h1>A área do retângulo de lados $lado1 e $lado2 é: " . $metragem . " m²</h1>";
    }
?>