<?php
    class jogador{
        private $nome;
        private $posicao;
        private $numeroCamisa;

        public function __construct($nome, $posicao, $numeroCamisa){
            $this->nome = $nome;
            $this->posicao = $posicao;
            $this->numeroCamisa = $numeroCamisa;
        }

        function getNome() {
            return $this->nome;
        }
        
        function getPosicao() {
            return $this->posicao;
        }

        function getNumeroCamisa() {
            return $this->numeroCamisa;
        }
    }