<?php

    require_once("Pessoa.php");
    require_once("Livro.php");

    $p1 = new Pessoa("Maria", 23, "Feminino");

    $p2 = new Pessoa("João", 32, "Masculino");

    $l1 = new Livro("Harry Potter", "J.K.ROWLING", 300, $p1);

    $l2 = new Livro("Percy Jackson", "Rick Riordan", 250, "as");

    $l3 = new Livro("Torre Negra", "Stephen King", 450, $p2);

    $l1->abrir();
    $l1->folhear();
    $l1->avancarPag();
    $l1->detalhes();

    $l3->abrir();
    $l3->folhear();
    $l3->avancarPag();
    $l3->detalhes();


    print_r($p1);


?>