<?php

    require_once 'time.php';
    require_once 'jogador.php';

    echo "Inicializando as classes...";
    echo '<br>';
    $time = new time("Time A", 1990);
    echo "Time: " . $time->getNome() . ", Fundado em: " . $time->getAnoFundacao();
    echo '<br>';
    
    echo "Adicionando jogadores ao time...";
    echo '<br>';    
    $time->addJogador("Jogador 1", "Atacante", 9);
    $time->addJogador("Jogador 2", "Defensor", 4);

    echo "Jogadores no time:";
    echo '<br>';
    foreach ($time->getJogadores() as $jogador) {
        echo "Nome: " . $jogador->getNome() . ", Posição: " . $jogador->getPosicao() . ", Número da Camisa: " . $jogador->getNumeroCamisa();
        echo '<br>';
    }