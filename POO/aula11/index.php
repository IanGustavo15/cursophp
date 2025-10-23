<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Visitante.php";
            use aula11\Pessoa;
            $v1 = new Visitante;
            print_r($v1);
        ?>
    </pre>
</body>
</html>