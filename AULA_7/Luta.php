<?php

    require_once("interfaceLuta.php");

    class Luta implements interfaceLuta {

        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos especiais
        public function setDesafiado($desafiado) {
            if ($desafiado instanceof Lutador) {
                $this->desafiado = $desafiado;
            }
        }
        public function getDesafiado() {
            return $this->desafiado;
        }
        public function setDesafiante($desafiante) {
            if ($desafiante instanceof Lutador) {
                $this->desafiante = $desafiante;
            }
        }
        public function getDesafiante() {
            return $this->desafiante;
        }
        public function setRounds($rounds) {
            $this->rounds = $rounds;
        }
        public function getRounds() {
            return $this->rounds;
        }
        public function setAprovada($aprovada) {
            $this->aprovada = $aprovada;
        }
        public function getAprovada() {
            return $this->aprovada;
        }

        // Métodos
        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
                $this->setAprovada(true);
                $this->setDesafiante($l1);
                $this->setDesafiado($l2);
            } else {
                $this->setAprovada(false);
                $this->setDesafiante(null);
                $this->setDesafiado(null);
            }
        }
        public function lutar() {
            if ($this->getAprovada()) {
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();

                $vencedor = rand(0, 2);

                switch($vencedor) {
                    case 0: // empate
                        echo "<br>Empatou!";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1: // ganhou desafiado
                        echo "<br>" . $this->getDesafiado()->getNome();
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2: // ganhou desafiante
                        echo "<br>" . $this->getDesafiante()->getNome();
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()-> perderLuta();
                        break;  
                }
                
            } else {
                echo "<br>Luta não pode acontecer";
            }
        }

    }

?>