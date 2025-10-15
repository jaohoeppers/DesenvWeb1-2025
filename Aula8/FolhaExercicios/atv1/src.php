<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    $soma = $valor1 + $valor2 + $valor3;

    if ($valor1 > 10 ){
        echo("<p style='color: blue;'> O resultado da soma é: $soma</p>");
    }elseif($valor2 < $valor3){
        echo("<p style='color: green;'> O resultado da soma é: $soma</p>");
    }elseif ($valor3<$valor1 && $valor3<$valor2) {
        echo("<p style='color: red;'> O resultado da soma é: $soma</p>");
    }
?>