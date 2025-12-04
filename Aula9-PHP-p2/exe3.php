<?php

    $valor = $_REQUEST['valor'];
    $desconto = $_REQUEST['desconto'];

    function calcularDesconto($valor, $desconto){
        if($desconto < 0 || $desconto > $valor){
            throw new Exception("Desconto inválido");
        }else if($valor < 0){
            throw new Exception("Valor inválido");
        }
        $valorComDesconto = $valor - $desconto;
        return $valorComDesconto;
    }

    try {
        $valorComDesconto = calcularDesconto($valor, $desconto);
        echo "Valor com desconto: " . $valorComDesconto;
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }

?>