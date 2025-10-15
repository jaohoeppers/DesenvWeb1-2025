<?php

    $valorTotal = $_POST['valorTotal'];
    $valorParcelas = $_POST['valorParcelas'];
    $quantParcelas = $_POST['quantParcelas'];

    $valorComJuros = $valorParcelas * $quantParcelas;
    $juros = $valorComJuros - $valorTotal;
    
    echo "<h3>O valor total das parcelas com juros foi de: R$ " . number_format($valorComJuros, 2, ',', '.') . "</h3>";
    echo "<h3>O valor total de juros foi de: R$ " . number_format($juros, 2, ',', '.') . "</h3>";
?>