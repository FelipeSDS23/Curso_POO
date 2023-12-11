<?php

    class Televisao {
        public $polegadas;
        public $resolução;
        public $ligado;
        public $volume;

        function ligar() {
            $this->ligado = true;
        }

        function desligar() {
            $this->ligado = false;
        }

        function aumentarVolume() {
            if($this->volume < 100) {
                $this->volume += 1;
            }
        }

        function diminuirVolume() {
            if($this->volume >= 0) {
                $this->volume -= 1;
            }
        }

    }