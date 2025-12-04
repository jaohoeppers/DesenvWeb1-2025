<?php

    $pastas = array("bsn" => 
                    array(
                        "3a Fase" => array("Algoritmos", "Eng. Software 1", "Calculo 1"),
                        "4a Fase" => array("Intro Web", "Banco Dados 1", "Eng. Software 2")
                    )
                );

    function printaPastas($pastas, String $profundidade = "-"){
        foreach ($pastas as $elemento => $valor) {
            if (is_string($elemento)) {
                echo $profundidade . $elemento . "{<br>";
            }
            if(is_array($valor)){
                printaPastas($valor, $profundidade."-");
            }
            else{
                echo $profundidade . $valor . "<br>";
                continue;
            }
            echo $profundidade . "}<br>";
        }
    }

    printaPastas($pastas);

?>