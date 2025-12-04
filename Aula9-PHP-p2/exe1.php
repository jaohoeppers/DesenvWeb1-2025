<?php

    require_once 'funcoes.php';

    $listaNotas = array(7,9,8,6,5);
    $listaPresencas = array(0,1,1,0,0,0,0,0,1,1,0,1,1,1,1,1,1,1,1,1);

    echo "Notas: ";
    foreach ($listaNotas as $nota) {
        echo $nota . " ";
    }
    echo "<br>Presenças: ";
    foreach ($listaPresencas as $presenca) {
        echo $presenca . " ";
    }
    echo "<br>";

    $media = calcularMedia($listaNotas);
    $frequencia = calcularFrequencia($listaPresencas);

    echo "Média: " . $media . "<br>";
    echo "Frequência: " . $frequencia . "%<br>";

    echo verificaAluno($media, $frequencia);
?>