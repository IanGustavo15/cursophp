<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado
        $v1 = $_GET["v1"] ?? 0;
        $v2= $_GET["v2"] ?? 0;
        $soma = $v1 + $v2;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$v1?>" step="1">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$v2?>" step="1">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
            <h2>Resultado da soma</h2>
            <?="<p>A soma de $v1 e $v2 é <strong>igual a $soma</strong><p>"?>
        </section>
</body>
</html>