<?php

    require_once("funcoes.php");
    echo("<h1>Buscar Pessoa por Nome</h1>");
    
    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo("<h2>Resultado da busca por: $nome</h2>");
        buscaPorNome($nome);
        echo("<br><br>");
    } else {
        echo("<h2>Digite o nome da pessoa que deseja buscar:</h2>");
        echo("<form method='POST' action='buscarPessoa.php'>");
        echo("<label>Nome: </label>");
        echo("<input type='text' name='nome' required>");
        echo("<br><br>");
        echo("<button type='submit'>Buscar</button>");
        echo("</form>");
        echo("<br>");
    }
    
    echo("<a href='index.html'>Voltar ao menu principal</a>");

?>