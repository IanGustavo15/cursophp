<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
    <?php 
        $num = $_GET["num"];
        $num_ant = $num - 1;
        $num_suc = $num + 1;

        echo "O número escolhido foi <strong>$num</strong><br>";
        echo "O seu <em>antecessor</em> é $num_ant<br>";
        echo "O seu <em>sucessor</em> é $num_suc";
    ?>
    <!-- <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button> -->
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>