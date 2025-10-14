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
        $t_semana = 604800;
        $t_dia = 86400;
        $t_hora = 3600;
        $t_minuto = 60;
        $resto = 0;
        $total_segundos = $_GET["total_segundos"] ?? 0;
        $semanas = $total_segundos / $t_semana;
        $resto = $total_segundos % $t_semana;
        $dias =  $resto / $t_dia;
        $resto = $resto % $t_dia;
        $horas = $resto / $t_hora;
        $resto = $resto % $t_hora;
        $minutos = $resto / $t_minuto;
        $resto = $resto % $t_minuto;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="total_segundos">Qual é o total de segundos?</label>
            <input type="number" name="total_segundos" id="id_total_segundos" value="<?=$total_segundos?>" step="1" min="0">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        echo "Analisando o tempo que você digitou, <strong>". number_format($total_segundos, 0, ",", ".") . " segundos</strong> equivalem a um total de: ";
        echo "<ul>
        <li>".floor($semanas). " semanas</li>
        <li>". floor($dias) . " dias</li>
        <li>". floor($horas) . " horas</li>
        <li>" . floor($minutos) . " minutos</li>
        <li>". $resto ." segundos</li>"
        ?>
    </section>
</body>
</html>