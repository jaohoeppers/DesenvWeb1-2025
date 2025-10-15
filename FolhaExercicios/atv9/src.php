<?php

    $valorTotal = $_POST['valorTotal'];
    $quantParcelas = $_POST['quantParcelas'];
    $valorInicial = $_POST['valorInicial'];
    $parcelas = 12 * $quantParcelas + 12;
    
    $porcJuros = $quantParcelas > 1 ? 0.02 +( 0.003 * $quantParcelas) : 0.02;

    $juros = $valorInicial * pow((1 + $porcJuros), $parcelas);
    $valorComJuros = $valorTotal + $juros;
    $valorParcela = ($valorTotal + $juros) / $parcelas;
    
    echo("<h3>O valor de cada parcela foi de: R$ " . number_format($valorParcela, 2, ',', '.') . "</h3>");
    echo("<h3>A porcentagem de juros aplicada foi de: " . ($porcJuros * 100) . "%</h3>");
    echo("<h3>O valor total das parcelas com juros foi de: R$ " . number_format($valorComJuros, 2, ',', '.') . "</h3>");
    echo("<h3>O valor total de juros foi de: R$ " . number_format($juros, 2, ',', '.') . "</h3>");
?>