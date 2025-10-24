<?php namespace aula11;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once "Visitante.php";
            require_once "Professor.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";
            require_once "Tecnico.php";


            $v1 = new Visitante;

            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("M");

            print_r($v1);

            $a1 = new Aluno;
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();

            print_r($a1);


            $b1 = new Bolsista;
            $b1->setMatricula(1112);
            $b1->setNome("Jublieu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            $b1->fazerAniversario();


            print_r($b1);

            $p1 = new Professor("Fagner", 45, "M", "Matemática", 5000);
            $p1->receberAumento(3000);

            print_r($p1);
        ?>
    </pre>
</body>
</html>