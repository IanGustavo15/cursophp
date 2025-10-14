<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $total_segundos = (int)$_GET["total_segundos"] ?? 0;
        
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="total_segundos">Qual é o total de segundos?</label>
            <input type="number" name="total_segundos" id="id_total_segundos" value="<?=$total_segundos?>" step="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        echo "Analisando o tempo que você digitou, <strong>". number_format($total_segundos, 0, ",", ".") . " segundos</strong> equivalem a um total de: ";
        // echo "<ul>
        // <li>$int_semanas semanas</li>
        // <li>$int_dias dias</li>
        // <li>$int_horas horas</li>
        // <li>$int_minutos minutos</li>
        // <li>$int_segundos segundos</li>"
        ?>
    </section>
</body>
</html>