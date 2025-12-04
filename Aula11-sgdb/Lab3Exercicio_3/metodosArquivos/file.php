<?php

    define('arquivo', 'dadosPessoas.txt');
    define('arquivo2', 'dados2.txt');

    if(file_exists(arquivo)){
        echo "<h3>Arquivo encontrado!</h3> <br>";

        $conteudo = file_get_contents(arquivo);
        echo ("Conteudo do arquivo:<br>");
        echo nl2br($conteudo);

        echo "<br>--------------------------------<br>";

        file_put_contents(arquivo2, serialize($conteudo), FILE_IGNORE_NEW_LINES);

        echo "Conteudo salvo no arquivo2<br>";

        echo "<a href='index.html'>Voltar ao menu principal</a>";


    } else {
        echo "<h3>Arquivo não encontrado!</h3> <br>";
    }