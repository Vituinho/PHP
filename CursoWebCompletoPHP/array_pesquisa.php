<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <a href="false_null_empty.php">Proxima aula</a>

    <?php
        //in_array() -> true ou false para a existência do valor
        //array_search() -> retorna o índice do valor pesquisado
        $lista_frutas = ['Banana','Maça','Morango','Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        //$existe = in_array('Abacate', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio

        $existe = array_search('Uva', $lista_frutas);
        //null -> texto = vazio
    
        if ($existe != null) { //true / false
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João','Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';
        
        echo in_array('João', $lista_coisas['pessoas']);

        /*
        if ($existe) { //true / false
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }
        */
    ?>
</body>
</html>