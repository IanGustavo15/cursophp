<?php namespace projetoyoutube;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Youtube</title>
</head>
<body>
    <pre>
        <?php
            require_once "Video.php";
            require_once "Gafanhoto.php";
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            print_r($v);

            $p[0] = new Gafanhoto("Jubileu", 46, "M", "juba");
            $p[1] = new Gafanhoto("Creuza", 50, "M", "creuzita");
            print_r($p);
        ?>
    </pre>
</body>
</html>