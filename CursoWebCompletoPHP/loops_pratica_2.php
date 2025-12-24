<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

<a href="atividade3.php">Proxima aula</a>
    
    <?php

        $funcionarios = [
            ['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'], 
            ['nome' => 'Maria', 'salario' => 3000],
            ['nome' => 'Júlia', 'salario' => 2200]];

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';
        
        foreach ($funcionarios as $idx => $funcionario) {
            foreach ($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";
            }
            echo "<hr>";
        }
        

    ?>

</body>
</html>