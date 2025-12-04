<?php

    require_once "model/pessoa.php";

    // Criando instâncias da classe Pessoa para cada membro da família
    $pai = new Pessoa("Carlos", "Silva", "1965-03-20");
    $mae = new Pessoa("Ana", "Silva", "1968-07-15");
    $irmao1 = new Pessoa("Pedro", "Silva", "1995-11-10");
    $irmao2 = new Pessoa("Julia", "Silva", "1998-04-25");
    $eu = new Pessoa("Lucas", "Silva", "2000-09-30");

    // Armazenando cada instância dentro de um array
    $familia = array($pai, $mae, $irmao1, $irmao2, $eu);

    // Exibindo os dados da família
    echo "<h2>Membros da Família:</h2>";
    foreach($familia as $membro) {
        echo $membro->getNomeCompleto() . " - Idade: " . $membro->getIdade() . " anos<br>";
    }

    // Salvando o conteúdo do array dentro de um arquivo .txt
    $nomeArquivo = "familia.txt";
    $conteudo = "=== DADOS DA FAMÍLIA ===\n\n";
    
    foreach($familia as $index => $membro) {
        $conteudo .= "Membro " . ($index + 1) . ":\n";
        $conteudo .= "Nome: " . $membro->getNomeCompleto() . "\n";
        $conteudo .= "Idade: " . $membro->getIdade() . " anos\n";
        $conteudo .= "------------------------\n";
    }
    
    // Gravando no arquivo
    $arquivo = fopen($nomeArquivo, "w");
    if($arquivo) {
        fwrite($arquivo, $conteudo);
        fclose($arquivo);
        echo "<br><br><strong>Arquivo '$nomeArquivo' criado com sucesso!</strong>";
    } else {
        echo "<br><br><strong>Erro ao criar o arquivo!</strong>";
    }

    // Salvando cada instância em arquivo JSON individual
    echo "<h2>Arquivos JSON Criados:</h2>";
    foreach($familia as $index => $membro) {
        $nomeArquivoJson = "membro_" . ($index + 1) . ".json";
        $jsonConteudo = $membro->toJson();
        
        $arquivoJson = fopen($nomeArquivoJson, "w");
        if($arquivoJson) {
            fwrite($arquivoJson, $jsonConteudo);
            fclose($arquivoJson);
            echo "✓ $nomeArquivoJson criado com sucesso!<br>";
        } else {
            echo "✗ Erro ao criar $nomeArquivoJson<br>";
        }
    }

    // Salvando todas as instâncias em um único arquivo JSON
    $nomeArquivoJsonGeral = "familia_completa.json";
    $familiaArray = array();
    foreach($familia as $membro) {
        $familiaArray[] = json_decode($membro->toJson(), true);
    }
    $jsonGeralConteudo = json_encode($familiaArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    
    $arquivoJsonGeral = fopen($nomeArquivoJsonGeral, "w");
    if($arquivoJsonGeral) {
        fwrite($arquivoJsonGeral, $jsonGeralConteudo);
        fclose($arquivoJsonGeral);
        echo "<br><strong>✓ Arquivo '$nomeArquivoJsonGeral' criado com sucesso!</strong>";
    } else {
        echo "<br><strong>✗ Erro ao criar o arquivo geral JSON!</strong>";
    }