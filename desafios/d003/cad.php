<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET["real"];
            $cotacao = 5.53;
            $dolar = $real * $cotacao;
            echo "Seus R$ $real equivalem a <strong>US$ $dolar</strong><br><br>";
            echo "<strong>*Cotação fixa de R$$cotacao</strong> informada diretamente no código.";
        ?>
    </section>
</body>
</html>