<?php

    require_once("funcoes.php");

    
    $nome = $_REQUEST["nome"];
    $sobrenome = $_REQUEST["sobrenome"];
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["password"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];

    salvarRegistro($nome, $sobrenome, $email, $senha, $cidade, $estado);

    echo("<br><a href='index.html'>Voltar ao menu principal</a>");

?>