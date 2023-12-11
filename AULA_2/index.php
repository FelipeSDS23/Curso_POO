<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php

        include_once("Caneta.php");
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampar();
        $c1->destampar();
        $c1->rabiscar();
        print_r($c1);
        
        echo "<br>";

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);

        echo "<br>";

        include_once("Televisao.php");
        $t1 = new Televisao;
        $t1->aumentarVolume();
        $t1->aumentarVolume();
        $t1->aumentarVolume();
        $t1->aumentarVolume();
        $t1->diminuirVolume();
        print_r($t1);
    ?>
</body>
</html>