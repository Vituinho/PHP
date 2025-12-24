<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <a href="variaveis_constantes.php">Proxima aula</a>

    <?php

    $nome = 'Maria';
    $cor = 'Amarelo';
    $idade = 25;
    $atividade_preferida = 'andar de bicicleta';

    //operador .

    echo 'Olá '. $nome .', vi que sua cor preferida é '. $cor .', estou vendo também que possui '. $idade .' anos e que gosta de '. $atividade_preferida .'';

    // aspas duplas
    echo '<br>';
    echo "Olá $nome vi que sua cor preferida é $cor estou vendo também que possui $idade anos e que gosta de $atividade_preferida";

    echo '<br>';
    echo 'Olá $nome vi que sua cor preferida é $cor estou vendo também que possui $idade anos e que gosta de $atividade_preferida';
    ?>
</body>

</html>