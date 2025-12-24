<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <a href="concatenacao.php">Proxima aula</a>
    <?php

        // string

        $nome = "Victor";
        
        //int
        $idade = 16;

        //float
        $peso = 63.5;

        //boolean
        $fumante_sn = true; //(true = 1) ou O(false = vazio)

        //... lógica ...//

        $idade = 30;
        

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>