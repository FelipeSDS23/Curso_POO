<?php

    require_once("InterfaceLutador.php");

    class Lutador implements InterfaceLutador {

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        function getNome() {
            return $this->nome;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }
        function getNacionalidade() {
            return $this->nacionalidade;
        }
        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        function getIdade() {
            return $this->idade;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function getAltura() {
            return $this->altura;
        }
        function setAltura($altura) {
            $this->altura = $altura;
        }
        function getPeso() {
            return $this->peso;
        }
        function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        function getCategoria() {
            return $this->categoria;
        }
        function setCategoria() {
            if($this->getPeso() < 52.2) {
                $categoria = "Inválido";
            } else if($this->getPeso() <= 70.3) {
                $categoria = "Leve";
            } else if($this->getPeso() <= 83.9) {
                $categoria = "Médio";
            } else if($this->getPeso() <= 120.2) {
                $categoria = "Pesado";
            } else {
                $categoria = "Inválido";
            }
            $this->categoria = $categoria;
        }
        function getVitorias() {
            return $this->vitorias;
        }
        function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
        function getDerrotas() {
            return $this->derrotas;
        }
        function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        function getEmpates() {
            return $this->empates;
        }
        function setEmpates($empates) {
            $this->empates = $empates;
        }
        function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }


        function apresentar() {
            echo "<br>--------------------------------";
            echo "<br>Lutador: " . $this->getNome();
            echo "<br>Origem: " . $this->getNacionalidade();
            echo "<br>" . $this->getIdade() . " anos";
            echo "<br>" . $this->getAltura() . "m de altura";
            echo "<br>Pesando " . $this->getPeso() . "kg";
            echo "<br>Ganhou: " . $this->getVitorias();
            echo "<br>Perdeu: " . $this->getDerrotas();
            echo "<br>Empatou: " . $this->getEmpates();
            echo "<br>------------------------------<br>";
        }
        function status() {
            echo "Nome: " . $this->getNome();
            echo "<br>Nacionalidade: " . $this->getNacionalidade();
            echo "<br>Idade: " . $this->getIdade();
            echo "<br>Altura: " . $this->getAltura();
            echo "<br>Peso: " . $this->getPeso();
            echo "<br>Categoria: " . $this->getCategoria();
            echo "<br>Número de vitórias: " . $this->getVitorias();
            echo "<br>Número de derrotas: " . $this->getDerrotas();
            echo "<br>Empates: " . $this->getEmpates();
            echo "<br> ------------------------------ <br>";
        }
        function ganharLuta() {
            echo "<br>" . $this->getNome() . " Ganhou a luta";
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta() {
            echo "<br>" . $this->getNome() . " Pedeu a luta";
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta() {
            echo "<br>" . $this->getNome() . " Empatou luta";
            $this->setEmpates($this->getEmpates() + 1);
        }

    }

?>