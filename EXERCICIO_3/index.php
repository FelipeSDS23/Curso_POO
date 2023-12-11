<?php

    echo "<pre>";

    require_once("Pessoa.php");
    // $p1 = new Pessoa(); // erro

    require_once("Visitante.php");
   
    // $v1 = new Visitante();
    // $v1->setNome("Juvenal");
    // $v1->setIdade(33);
    // $v1->setSexo("M");
    // print_r($v1);

    require_once("Aluno.php");

    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(1111);
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setCurso("Informática");
    $a1->pagarMensalidade();
    print_r($a1);

    echo "<br>";
    require_once("Bolsista.php");

    $b1 = new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Administração");
    $b1->setIdade(17);
    $b1->pagarMensalidade();
    print_r($b1);

    echo "<br>";
    require_once("Professor.php");

    $p1 = new Professor();
    $p1->setNome("Gustavo");
    $p1->setIdade(34);
    $p1->setSexo("Masculino");
    $p1->fazerAniv();
    $p1->setEspecialidade("Programação");
    $p1->setSalario(3000);
    $p1->receberAumento(500);
    print_r($p1);

    echo "<br>";
    require_once("Tecnico.php");

    $t1 = new Tecnico();
    $t1->setNome("Paulo");
    $t1->setIdade(29);
    $t1->setSexo("Masculino");
    $t1->fazerAniv();
    $t1->setMatricula(1523);
    $t1->setCurso("ADS");
    $t1->pagarMensalidade();
    $t1->setRegistroProfissional(4212);
    $t1->praticar();
    print_r($t1);
?>