<?php

    $valorTotal = $_POST['valorTotal'];
    $quantParcelas = $_POST['quantParcelas'];
    $parcelas = 12 * $quantParcelas + 12;
    
    $porcJuros = 0.05 * $quantParcelas;
    $juros = $valorTotal * $porcJuros;
    $valorParcela = ($valorTotal + $juros) / $parcelas;
    $valorComJuros = $valorTotal + $juros;

    echo("<h3>O valor de cada parcela foi de: R$ " . number_format($valorParcela, 2, ',', '.') . "</h3>");
    echo("<h3>A porcentagem de juros aplicada foi de: " . ($porcJuros * 100) . "%</h3>");
    echo("<h3>O valor total das parcelas com juros foi de: R$ " . number_format($valorComJuros, 2, ',', '.') . "</h3>");
    echo("<h3>O valor total de juros foi de: R$ " . number_format($juros, 2, ',', '.') . "</h3>");
?>