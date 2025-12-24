<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <a href="loops_pratica_2.php">Proxima aula</a>

    <?php

    $itens = ['sofá','mesa','cadeira','fogão','geladeira'];

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach($itens as $item) {
        echo "$item";

        if ($item == 'mesa') {
            echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
        }
        echo '<br>';
    }

    ?>

</body>
</html>