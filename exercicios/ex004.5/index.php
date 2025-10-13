<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>
<body>
    <h1>Testando</h1>
    <?php 
    $a = abs(-500);
    echo "O valor abs é $a.<br><br>";

    $b = 135;
    $c = base_convert($b, 10, 16);
    $d = base_convert($b, 10, 8);
    $e = base_convert($b, 10, 2);
    echo "O valor $b convertido em hexadecimal é $c.<br>" ;
    echo "O valor $b convertido em octal é $d.<br>";
    echo "O valor $b convertido em binário é $e.<br><br>";

    $f = intdiv(5, 2);
    echo "O resultado da divisão inteira é $f.<br><br>";
    ?>
</body>
</html>