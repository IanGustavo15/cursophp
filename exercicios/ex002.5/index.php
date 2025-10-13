<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando variáveis e constantes</title>
</head>
<body>
    <!-- É possível usar símbolos e acentos pra dar nome às variáveis e constantes -->

     <!-- Tente usar letras minúsculas para variáveis e letras maiúsculas para constantes -->

    <h1>Informações pessoais</h1>
    <p>
        <?php 
        $nome = "Ian";
        $sobrenome = "Gustavo";
        $peso = 100;
        $idade = 23;
        const PAIS = "Brasil";
        
        echo "Meu nome é $nome $sobrenome, tenho $idade anos, peso $peso Kg e moro no " . PAIS . "."; 
        ?>
    </p>
    <p>
        <?php 
        $nomeCompleto = "Ian Gustavo Souza Nunes"; // Método Camel Case (recomendado para variáveis)
        const telefone_para_contato = "(75) 98165-1880"; // Método Snake Case (recomendado para constantes)

        echo "Meu nome completo é $nomeCompleto.";
        echo " E meu telefone é " . telefone_para_contato;
        ?>
        </p>
</body>
</html>