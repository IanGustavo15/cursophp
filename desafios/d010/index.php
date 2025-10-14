<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $ano_atual = date("Y");
        $ano_nascimento = $_GET["ano_nascimento"] ?? 2000;
        $ano_futuro = $_GET["ano_futuro"] ?? (int)$ano_atual;
        $idade = (int)$ano_futuro - (int)$ano_nascimento;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="ano_nascimento">Em que ano você nasceu?</label>
            <input type="number" name="ano_nascimento" id="id_ano_nascimento" step="1" value="<?=$ano_nascimento?>">
            <label for="ano_futuro">Quer saber sua idade em que ano? (atualmente estamos em <?=$ano_atual?>)</label>
            <input type="number" name="ano_futuro" id="ano_futuro" step="1"  value="<?=$ano_futuro?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
        </main>
        <section>
            <h2>Resultado</h2>
        <?php 
        echo "Quem nasceu em $ano_nascimento vai ter <strong>$idade anos</strong> em $ano_futuro!";
        ?>
        </section>
</body>
</html>