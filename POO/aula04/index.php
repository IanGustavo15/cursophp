<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>

<body>
    <pre>
        <?php
        require_once 'caneta.php';
        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("AAA", "Verde", 0.9);
        // $c1->setModelo("BIC");
        // $c1->modelo = "BIC";
        // $c1->setPonta(0.5);
        // $c1->ponta = 0.4; Erro pois ponta é privado, só é possível via método
        // echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        print_r($c1);
        print_r($c2);
        ?>
    </pre>
</body>

</html>