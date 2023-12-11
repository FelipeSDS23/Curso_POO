<?php

    class Caneta {
        public $modelo;
        public $cor;
        public $ponta;
        public $carga;
        public $tampada;

        function rabiscar() {
            if($this->tampada) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Rabiscando...</p>";
            }
        }

        function tampar() {
            $this->tampada = true;
        }

        function destampar() {
            $this->tampada = false;
        }

    }