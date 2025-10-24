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
            require_once "Canguru.php";
            require_once "Cachorro.php";
            require_once "Cobra.php";
            require_once "Tartaruga.php";
            require_once "Goldfish.php";
            require_once "Arara.php";
            require_once "Lobo.php";

            $cac1 = new Cachorro;

            $can1 = new Canguru;

            $cob1 = new Cobra;

            $tar1 = new Tartaruga;

            $gold1 = new Goldfish;

            $arara1 = new Arara(3, 4, 2, "Colorida");

            $lobo1 = new Lobo;


            // $cac1->locomover();
            // $can1->locomover();
            // $cob1->locomover();
            // $tar1->locomover();

            $cac1->reagirFrase("Olá");
            $cac1->reagirFrase("Vai apanhar");
            $cac1->reagirHora(11, 45);
            $cac1->reagirHora(21, 00);
            $cac1->reagirDono(true);
            $cac1->reagirDono(false);
            $cac1->reagirIdadePeso(2, 12.5);
            $cac1->reagirIdadePeso(17, 4.5);

            print_r($cac1);
            print_r($can1);
            print_r($cob1);
            print_r($tar1);
            print_r($gold1);
            print_r($arara1);
            print_r($lobo1);
        ?>
    </pre>
</body>
</html>