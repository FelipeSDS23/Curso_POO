<?php

    include_once("ContaBanco.php");

    $contaMaria = new ContaBanco();
    $contaMaria->abrirConta("cp", "Maria", 1);
    
    $contaPedro = new ContaBanco();
    $contaPedro->abrirConta("cc", "Pedro", 2);
    
    print_r($contaMaria);
    echo "<br>";
    print_r($contaPedro);
    echo "<br>";

    $contaMaria->depositar(500);
    $contaPedro->depositar(300);

    print_r($contaMaria);
    echo "<br>";
    print_r($contaPedro);
    echo "<br>";

    $contaMaria->sacar(100);

    print_r($contaMaria);
    echo "<br>";
    print_r($contaPedro);
    echo "<br>";
?>