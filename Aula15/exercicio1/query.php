<?php

    class query{
        private $sql;
        private $registros;
        private $conexao;
        private $queryResource;

        public function __construct($conexaoBd){
            $this->registros = 0;
            $this->conexao = $conexaoBd;
        }

        public function setSql($sql){
            $this->sql = $sql;
        }

        public function open(){
            $retorno = pg_query($this->conexao->getInternalConnection(), $this->sql);
            if($retorno){
                $this->registros = pg_num_rows($retorno);
                $this->queryResource = $retorno;
                return true;
            } else {
                return false;
            }
        }

        public function getNextRow(){
            return pg_fetch_assoc($this->queryResource);
        }

    }

?>