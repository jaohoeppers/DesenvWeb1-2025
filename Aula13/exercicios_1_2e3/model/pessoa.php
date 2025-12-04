<?php

    class Pessoa {
        private $nome;
        private $sobrenome;
        private $dateNascimento;
        private $cpfcnpj;
        private $tipo;
        private $telefone;
        private $endereco;

        function getNomeCompleto(){
            return $this->nome . " " . $this->sobrenome;
        }

        function getIdade(){
            $dataAtual = new DateTime();
            $idade = $dataAtual->diff($this->dateNascimento);
            return $idade->y;
        }

        function toJson(){
            // Cria array com os dados para serialização
            $dados = get_object_vars($this);
            // Converte a data de nascimento para string
            $dados['dateNascimento'] = $this->dateNascimento->format('Y-m-d');
            return json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        private function inicializaClasse(){
        }

        public function __construct($nome, $sobrenome, $dateNascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->dateNascimento = new DateTime($dateNascimento);
            $this->inicializaClasse();
        }

    }