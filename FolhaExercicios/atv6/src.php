<?php

    $kgMaca = $_POST['kgMaca'];
    $quantMaca = $_POST['quantMaca'];

    $kgMelancia = $_POST['kgMelancia'];
    $quantMelancia = $_POST['quantMelancia'];

    $kgLaranja = $_POST['kgLaranja'];
    $quantLaranja = $_POST['quantLaranja'];

    $kgRepolho = $_POST['kgRepolho'];
    $quantRepolho = $_POST['quantRepolho'];

    $kgCenoura = $_POST['kgCenoura'];
    $quantCenoura = $_POST['quantCenoura'];

    $kgBatata = $_POST['kgBatata'];
    $quantBatata = $_POST['quantBatata'];

    $valorMaca = $kgMaca * $quantMaca;
    $valorMelancia = $kgMelancia * $quantMelancia;
    $valorLaranja = $kgLaranja * $quantLaranja;
    $valorRepolho = $kgRepolho * $quantRepolho;
    $valorCenoura = $kgCenoura * $quantCenoura;
    $valorBatata = $kgBatata * $quantBatata;

    echo("O valor total gasto em maçãs foi: R$ " . number_format($valorMaca, 2, ',', '.') . "<br>");
    echo("O valor total gasto em melancias foi: R$ " . number_format($valorMelancia, 2, ',', '.') . "<br>");
    echo("O valor total gasto em laranjas foi: R$ " . number_format($valorLaranja, 2, ',', '.') . "<br>");
    echo("O valor total gasto em repolhos foi: R$ " . number_format($valorRepolho, 2, ',', '.') . "<br>");
    echo("O valor total gasto em cenouras foi: R$ " . number_format($valorCenoura, 2, ',', '.') . "<br>");
    echo("O valor total gasto em batatas foi: R$ " . number_format($valorBatata, 2, ',', '.') . "<br>");

    $valorTotal = $valorMaca + $valorMelancia + $valorLaranja + $valorRepolho + $valorCenoura + $valorBatata;
    echo "<h3>O valor total das compras foi de: R$ " . number_format($valorTotal, 2, ',', '.') . "</h3>";

    if($valorTotal > 50){
        echo("<h3> O dinheiro não será suficiente para pagar a conta, pois o valor total das compras ultrapassa R$ 50,00</h3>");
        echo("<h3 style = 'color: red;'> O valor faltante é de: R$ " . number_format($valorTotal - 50, 2, ',', '.') . "</h3>");
    }elseif ($valorTotal == 50) {
        echo("<h3 style = 'color: green;'> O saldo disponivel para compras esta esgotado</h3>");
    }else{
        echo("<h3> O dinheiro será suficiente para pagar a conta, pois o valor total das compras não ultrapassa R$ 50,00</h3>");
        echo("<h3 style = 'color: blue;'> O valor que você ainda pode gastar é de: R$ " . number_format(50 - $valorTotal, 2, ',', '.') . "</h3>");
    }
?>