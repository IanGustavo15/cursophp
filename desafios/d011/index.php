<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $preco = $_GET["preco"]??1000;
        $reaj = $_GET["reaj"]??10;
        $valor_final = $preco * ($reaj / 100 + 1);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idpreco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reaj">Qual será o percentual do reajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "O produto que custava ". numfmt_format_currency($padrao, $preco, "BRL"). " com $reaj% de aumento vai passar a custar ". numfmt_format_currency($padrao, $valor_final, "BRL"). " a partir de agora.";
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>