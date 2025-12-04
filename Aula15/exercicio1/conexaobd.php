<?php

    class conexaoBd {
        private $host;
        private $port;
        private $dbname;
        private $user;
        private $pass;

        private $conection;

        public function __construct($host, $port, $dbname, $user, $pass) {
            $this->host = $host;
            $this->port = $port;
            $this->dbname = $dbname;
            $this->user = $user;
            $this->pass = $pass;
        }

        private function getStringConexao() {
            return "host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->pass}";
        }

        public function conecta() {
            if (!$this->conection) {
                pg_connect($this->getStringConexao());
            }else{
                return $this->conection;
            }
        }

        public function desconecta() {
            pg_close();
        }

        public 
    }


?>