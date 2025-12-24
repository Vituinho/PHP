<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <a href="array_pesquisa.php">Proxima aula</a>

    <?php
        //$lista_coisas = array();
        $lista_coisas = [];

        $lista_coisas['frutas'] = [1 => 'Banana','Maça','Morango','Uva'];

        $lista_coisas['pessoas'] = [1 => 'João','José','Maria'];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';
        echo $lista_coisas['frutas'][3];
        echo '<br>';
        echo $lista_coisas['pessoas'][2];
    ?>
</body>
</html>