<?php

    DEFINE('BD_HOST', 'localhost');
    DEFINE('BD_PORT', '3306');
    DEFINE('BD_NAME', 'postgres');
    DEFINE('BD_USER', 'postgres');
    DEFINE('BD_PASS', 'admin');

    $conexaoBd = new conexaoBd(BD_HOST, BD_PORT, BD_NAME, BD_USER, BD_PASS);

    if($conexaoBd->conecta()){
        echo "Conexão com o banco de dados realizada com sucesso!";

        $query = new query($conexaoBd);
        $query->setSql("SELECT * FROM usuarios");
        if ($query->open()) {
            while ($linha = $query->getNextRow()) {
                echo "ID: " . $linha['id'] . " - login: " . $linha['login'] . "<br>";
            }
        }
    } else {
        echo "Erro ao conectar com o banco de dados.";
    }

?>