<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <a href="funcoes_arrays.php">Proxima aula</a>

    <?php

        //false (true/false) - tipo variável boolean
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é null';
        }

        echo '<br>';

        if(is_null($funcionario2)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é null';
        }

        echo '<br>';

        if(is_null($funcionario3)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é null';
        }

        echo '<br>';

        //valores vazios?
        if(empty($funcionario1)) {
            echo 'Sim, a variavel está vazia';
        } else {
            echo 'Não, a variavel não esta vazia';
        }

        echo '<br>';

        if(empty($funcionario2)) {
            echo 'Sim, a variavel está vazia';
        } else {
            echo 'Não, a variavel não esta vazia';
        }

        echo '<br>';

        if(empty($funcionario3)) {
            echo 'Sim, a variavel está vazia';
        } else {
            echo 'Não, a variavel não esta vazia';
        }
    ?>

</body>
</html>