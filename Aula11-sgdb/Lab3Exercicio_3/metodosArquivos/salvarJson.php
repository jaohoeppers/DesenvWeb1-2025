<?php

    define('arquivo', 'dadosPessoas.txt');

    if(file_exists(arquivo)){
        echo "<h3>Arquivo encontrado!</h3> <br>";

        $nome = $_REQUEST["nome"];
        $sobrenome = $_REQUEST["sobrenome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["password"];
        $cidade = $_REQUEST["cidade"];
        $estado = $_REQUEST["estado"];

        $pessoa = array(
            "nome" => $nome,
            "sobrenome" => $sobrenome,
            "email" => $email,
            "senha" => $senha,
            "cidade" => $cidade,
            "estado" => $estado
        );

        $conteudo = json_encode($pessoa) . PHP_EOL;

        salvarRegistro($conteudo);

        echo "Pessoa salva no arquivo<br>";

        echo "<a href='index.html'>Voltar ao menu principal</a>";


    } else {
        $arquivo = fopen(arquivo, "w+");
        if($arquivo == false){
            echo "Erro ao criar o arquivo";
        } else {
            echo "Arquivo criado com sucesso!";
            fclose($arquivo);
        }

        $nome = $_REQUEST["nome"];
        $sobrenome = $_REQUEST["sobrenome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["password"];
        $cidade = $_REQUEST["cidade"];
        $estado = $_REQUEST["estado"];

        $pessoa = array(
            "nome" => $nome,
            "sobrenome" => $sobrenome,
            "email" => $email,
            "senha" => $senha,
            "cidade" => $cidade,
            "estado" => $estado
        );

        $conteudo = json_encode($pessoa) . PHP_EOL;

        salvarRegistro($conteudo);

        echo "<a href='index.html'>Voltar ao menu principal</a>";

    }

    function salvarRegistro($conteudo){
        echo "Salvando conteudo...<br>";
        echo nl2br($conteudo);

        file_put_contents(arquivo, $conteudo, FILE_APPEND);

        echo "Conteudo salvo no arquivo<br>";
    }
    