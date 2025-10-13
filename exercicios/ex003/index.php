<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // // 0x = hexadecimal
    // // 0b = binário
    // // 0  = octal
    //  $num = 0x1A;
    //  echo "O valor da variável é $num. ";
    // var_dump($num);

    // $v = 300;
    // $a = "Ian";
    // $b = false;
    // $c = 43.2;
    // var_dump($v);
    // var_dump($a);
    // var_dump($b);
    // var_dump($c);

    // $num = (integer) 3e2; // 3 * 10^2
    // echo "O valor da variável é $num. ";
    // var_dump($num)

    // $casado = false;
    // echo "O valor para casado é $casado";

    // $vet = [6, 2.5, "Maria", false];
    // var_dump($vet);

    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>