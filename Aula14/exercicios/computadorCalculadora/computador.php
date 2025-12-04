<?php

    class computador{
        private $estado;

        public function __construct(){
            $this->ligar();
        }

        function ligar() {
            echo 'Ligado';
            $this->estado = 'Ligado';
        }

        function desligar() {
            echo 'Desligado';
            $this->estado = 'Desligado';
        }

        function status() {
            return $this->estado;
        }
    }

?>