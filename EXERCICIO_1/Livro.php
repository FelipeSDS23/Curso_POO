<?php

    require_once("Publicacao.php");
    require_once("Pessoa.php");

    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->paginaAtual = 0;
            $this->aberto = false;
            $this->setLeitor($leitor);
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }
        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        public function getLeitor() {
            return $this->leitor;
        }   
        public function setLeitor($leitor) {
            if($leitor instanceof Pessoa) {
                $this->leitor = $leitor;
            } else {
                echo "O leitor não é uma pessoa";
            }
            
        }

        public function detalhes() {
            echo "<br>---------------------------<br>" .
                "Título: " . $this->getTitulo() . "<br>" .
                "Autor: " . $this->getAutor() . "<br>" .
                "Total de páginas: " . $this->getTotPaginas() . "<br>" .
                "Página atual: " . $this->getPagAtual() . "<br>" .
                "Aberto: " . ($this->getAberto() ? "sim" : "não") . "<br>" .
                "Leitor: " . $this->getLeitor()->getNome() . "<br>" .
                "---------------------------<br>"
            ;
        }
        public function abrir() {
            $this->setAberto(true);
        }
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear() {
            if($this->getAberto()) {
                $this->setPagAtual(rand(0, $this->getTotPaginas()));
            } else {
                "O livro está fechado, abro-o antes de folhear";
            }
            
        }
        public function avancarPag() {
            if($this->getAberto()) {
                if($this->getPagAtual() < $this->getTotPaginas()) {
                    $this->setPagAtual($this->getPagAtual() + 1);
                } else {
                    echo "O livro terminou";
                }
            } else {
                "O livro está fechado, abro-o antes de mudar a página";
            }
        }
        public function voltarPag() {
            if($this->getAberto()) {
                if($this->getPagAtual() != 0) {
                    $this->setPagAtual($this->getPagAtual() - 1);
                } else {
                    echo "Impossível voltar";
                }
            } else {
                "O livro está fechado, abro-o antes de mudar a página";
            }
        }

    }

?>