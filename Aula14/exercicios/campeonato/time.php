<?php

require_once 'jogador.php';

    class time{
        private $nome;
        private $anoFundacao;
        private $jogadores = array();

        public function __construct($nome, $anoFundacao){
            $this->nome = $nome;
            $this->anoFundacao = $anoFundacao;
        }

        function getNome() {
            return $this->nome;
        }
        
        function getAnoFundacao() {
            return $this->anoFundacao;
        }

        function getJogadores() {
            return $this->jogadores;
        }

        function addJogador($nome, $posicao, $numeroCamisa) {
            $jogador = new jogador($nome, $posicao, $numeroCamisa);
            array_push($this->jogadores, $jogador);
        }

        function getJogador($nome) {
            foreach ($this->jogadores as $jogador) {
                if ($jogador->getNome() == $nome) {
                    return $jogador;
                }
            }
            return null;
        }
    }