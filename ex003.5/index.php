<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes com aspas simples e duplas</title>
</head>
<body>
    <h1>Testando aspas com o lutador Minotauro</h1>
    <?php 
        $nom = "Rodrigo";
        $snom = "Nogueira";
        $apelido = "Minotauro";
        // Formato Heredoc
        echo <<< FRASES
        O nome do lutador é  . $nom   "Minotauro"   $snom
        O nome do lutador é $nom "Minotauro" $snom 
        O nome do lutador é $nom "$apelido" $snom
        FRASES;

        // echo "O nome do lutador é $nom \"Minotauro\" $snom.";

        // // Formato Nowdoc
        // echo <<< 'FRASES'
        // O nome do lutador é  . $nom   "Minotauro"   $snom
        // O nome do lutador é $nom \"Minotauro\" $snom 
        // O nome do lutador é $nom \"$apelido\" $snom
        // FRASES;
    ?>
</body>
</html>