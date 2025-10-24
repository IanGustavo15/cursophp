<?php namespace aula12;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once "Ave.php";
            require_once "Mamifero.php";
            require_once "Peixe.php";
            require_once "Reptil.php";

            $a = new Ave(3.5, 3, 2, "Azul");


            $m = new Mamifero;


            $p = new Peixe;


            $r = new Reptil;




            print_r($a);
            print_r($m);
            print_r($p);
            print_r($r);
        ?>
    </pre>
</body>
</html>