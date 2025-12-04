<?php

    class usuario{
        private $id;
        private $name;
        private $login;
        private $password;

        public function __construct($id, $name, $login, $password){
            $this->id = $id;
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
        }

        public function getName(){
            return $this->name;
        }

        public function getLogin(){
            return $this->login;
        }

        public function getPassword(){
            return $this->password;
        }
        
        public function getId(){
            return $this->id;
        }

    }

?>