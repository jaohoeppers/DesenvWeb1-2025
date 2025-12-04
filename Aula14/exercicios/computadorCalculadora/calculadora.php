<?php

    class calculadora{

        private $num1;
        private $num2;

         public function __construct($num1, $num2){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        function soma($valor1 = null, $valor2 = null){
            $valor1 = $valor1!=null ? $valor1 : $this->num1;
            $valor2 = $valor2!=null ? $valor2 : $this->num2;
            return ($valor1 + $valor2);
        }

        function subtrai($valor1 = null, $valor2 = null){
            $valor1 = $valor1!=null ? $valor1 : $this->num1;
            $valor2 = $valor2!=null ? $valor2 : $this->num2;
            return ($valor1 - $valor2);
        }

        function multiplica($valor1 = null, $valor2 = null) {
            $valor1 = $valor1!=null ? $valor1 : $this->num1;
            $valor2 = $valor2!=null ? $valor2 : $this->num2;
            return ($valor1 * $valor2);
        }

        function divide($valor1 = null, $valor2 = null) {
            $valor1 = $valor1!=null ? $valor1 : $this->num1;
            $valor2 = $valor2!=null ? $valor2 : $this->num2;
            return ($valor1 / $valor2);
        }
    }

?>