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
            $dolar = $real / $cotacao;
            // echo "Seus R\$ " . number_format($real, 2, ",", ".")  . " equivalem a <strong>US\$ " . number_format($dolar, 2, ",", ".") . "</strong><br><br>";
            // echo "<strong>*Cotação fixa de R\$ " . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código.";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL")  . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "<p><strong>*Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>