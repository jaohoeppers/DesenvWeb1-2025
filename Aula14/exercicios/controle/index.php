<?php

    require_once 'session.php';
    require_once 'usuario.php';

    $session = new session();

    if($session->getStatus() == 1){
        $user = new usuario(1,'joao', 'joao123', 'senhaSegura');
        $session->setUsuarioSessao($user);
    }

    $session->salvaSessao();

    echo "Usuário da sessão: ";
    echo $session->getUsuarioSessao()->getName();

    $session->encerrarSessao();

    $session = new session();
    $user = new usuario(2,'maria', 'maria456', 'outraSenha');

    $session->setUsuarioSessao($user);

    $session->salvaSessao();
    
    echo "Usuário da sessão: ";
    echo $session->getUsuarioSessao()->getName();

?>