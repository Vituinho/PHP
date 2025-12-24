<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <a href="loops_foreach.php">Proxima aula</a>

    <?php

        $registros = [
            ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'],
            ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
            ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
            ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'],
            ['titulo' => 'Título notícia 5', 'conteudo' => 'Conteúdo notícia 5']];

        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br> <br> <br>';
        $idx = 0;

        //count -> conta a quantidade de elementos de array
        
        echo 'O array possui: ' . count($registros) . 'registros';
        echo '<br>';

        /*
        while($idx < count($registros)) {
            
            echo '<h3>' . ($registros[$idx]['titulo'] . '</h3>');
            echo '<p>' . ($registros[$idx]['conteudo'] . '</p>');

            echo '<hr>';

            $idx++;
        }
        */
        
        /*
        do {
            echo '<h3>' . ($registros[$idx]['titulo'] . '</h3>');
            echo '<p>' . ($registros[$idx]['conteudo'] . '</p>');

            echo '<hr>';

            $idx++;
        } while ($idx < count($registros))

        */

        for ($idx = 0; $idx < count($registros); $idx++) {
            echo '<h3>' . ($registros[$idx]['titulo'] . '</h3>');
            echo '<p>' . ($registros[$idx]['conteudo'] . '</p>');

            echo '<hr>';
        }
        

    ?>

</body>
</html>