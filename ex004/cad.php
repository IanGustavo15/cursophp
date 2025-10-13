<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET);
            // var_dump($_POST);
            // var_dump($_REQUEST); // Funciona tanto para GET quanto para POST

            $nome = $_REQUEST["nome"] ?? "sem nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "sem sobrenome";

            echo "É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site.";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>