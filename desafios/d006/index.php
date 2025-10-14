<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>" min="0">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>" min="1">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
            </tr>
            <tr>
            <td><?=$resto?></td>
            <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>