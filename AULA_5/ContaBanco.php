<?php

    class ContaBanco {
        public $numConta = 0;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function getNumConta() {
            return $this->numConta;
        }

        private function setNumConta($n) {
            $this->numConta = $n;
        }

        public function getTipo() {
            return $this->tipo;
        }

        private function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        private function setDono($dono) {
            $this->dono = $dono;
        }

        public function getDono() {
            return $this->dono;
        }

        private function setStatus($status) {
            $this->status = $status;
        }

        public function getStatus() {
            return $this->status;
        }

        private function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function __construct() {
            $this->setStatus(false);
            $this->setSaldo(0);
        }

        public function abrirConta($tipo, $dono, $n) {
            $this->setTipo($tipo);      
            $this->setStatus(true);
            if($tipo === "cc") {
                $this->setSaldo(50.0);
            } else if ($tipo === "cp") {
                $this->setSaldo(150.0);
            } 
            $this->setNumConta($n);
            $this->setDono($dono);
        } 

        public function fecharConta() {
            if($this->saldo === 0) {
                $this->status = false;
            } else if($this->saldo > 0) {
                echo "Esta conta ainda possui saldo, favor sacar todo o valor disponível antes de encerrar a conta";
            } else {
                echo "Ainda há pendências financeiras em sua conta, favor efetuar o pagamento antes de encerrar a conta";
            }            
        }

        public function depositar($valor) {
            if($this->status = true) {
                $this->saldo += $valor;
            } else {
                echo "Conta inexistente";
            }
        }

        public function sacar($valor) {
            if($this->status = true) {
                if($this->saldo >= $valor) {
                    $this->saldo -= $valor;
                } else {
                    echo "Saldo insuficiente.";
                }
            } else {
                echo "Conta inexistente";
            }   
        }

        public function pagarMensal() {

            if($this->tipo === "cc") {
                $mensalidade = 12;
            } 
            else if ($this->tipo === "cp") {
                $mensalidade = 20;
            }    

            if($this->getStatus()) {
                if($this->getSaldo() >= $mensalidade ) {
                    $this->saldo -= $mensalidade;
                }
            } else {
                echo "Impossível pagar";
            }
       
        }
    }

?>