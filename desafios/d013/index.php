<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pBR", NumberFormatter::CURRENCY);
        $saque = $_GET["saque"] ?? 0;
        $nota_100 = $saque / 100;
        $resto = $saque  % 100;
        $nota_50 =  $resto / 50;
        $resto = $resto  % 50;
        $nota_10 = $resto / 10;
        $resto = $resto  % 10;
        $nota_5 = $resto / 5;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="saque">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5">
        <p>Notas disponíveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao, $saque, "BRL")?></h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
       <ul>
        <li><img src="imagens/100-reais.jpg" alt="nota100"><?="x".floor($nota_100)?></li>
        <li><img src="imagens/50-reais.jpg" alt="nota100"><?="x".floor($nota_50)?></li>
        <li><img src="imagens/10-reais.jpg" alt="nota100"><?="x".floor($nota_10)?></li>
        <li><img src="imagens/5-reais.jpg" alt="nota100"><?="x".floor($nota_5)?></li>
       </ul>
    </section>
</body>
</html>