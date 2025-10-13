<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$ 1.518,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $salario_min = 1518;
            $salario = $_GET["salario"] ?? 0;
            $num_salarios = intdiv($salario, $salario_min);
            $excesso = $salario - ($salario_min * $num_salarios);
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>$num_salarios salários mínimos</strong> + " . numfmt_format_currency($padrao, $excesso, "BRL"). ".";
        ?>
    </section>
</body>
</html>