<?php

    require_once 'usuario.php';

    class session{
        private $sessionId;
        private $status;
        private $usuario;
        private $dataHoraInicio;
        private $dataHoraUltimoAcesso;

        public function __construct(){
            $this->iniciaSessao();
        }

        private function iniciaSessao(){
            session_start();
            if(isset($_SESSION['usuario'])){
                $this->dataHoraInicio = $this->recuperaDadosSessao('dataHoraInicio');
                $this->dataHoraUltimoAcesso = date('Y-m-d H:i:s');
                $this->usuario = $this->recuperaDadosSessao('usuario');
            }else {
                $this->dataHoraInicio = date('Y-m-d H:i:s');
            }
            $this->sessionId = session_id();
            $this->status = 1;
            echo "Sessão iniciada em " . $this->dataHoraInicio;
            echo '<br>';
        }

        public function salvaSessao(){
            $this->gravaDadosSessao('dataHoraInicio', $this->dataHoraInicio);
            $this->gravaDadosSessao('dataHoraUltimoAcesso', date('Y-m-d H:i:s'));
            $this->gravaDadosSessao('usuario', $this->usuario->getId());
        }

        public function encerrarSessao(){
            session_unset();
            session_destroy();
            $this->status = 'Encerrada';
            echo "Sessão encerrada.";
            echo '<br>';
        }

        public function getUsuarioSessao(){
            return $this->usuario;
        }

        public function setUsuarioSessao($usuario){
            $this->usuario = $usuario;
        }

        public function gravaDadosSessao($chave, $valor){
            if(isset($_SESSION[$chave])){
                echo "A chave '$chave' já existe na sessão.";
                echo '<br>';
                return false;
            } else {
                $_SESSION[$chave] = $valor;
                echo "Dados gravados na sessão: $chave => $valor";
                echo '<br>';
                return true;
            }
        }

        public function recuperaDadosSessao($chave){
            if(isset($_SESSION[$chave])){
                return $_SESSION[$chave];
            } else {
                echo "A chave '$chave' não existe na sessão.";
                echo '<br>';
                return null;
            }
        }

        public function getStatus() {
            return $this->status;
        }


    }

?>