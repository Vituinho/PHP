<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <a href="operadores_aritmeticos.php">Proxima aula</a>
    <?php
        //gettype() => retorna o tipo da varíavel
        $valor = false;
        //$valor2 = (string) $valor; //float , double, real

        //$valor2 = (int) $valor; // integer, int
        //$valor2 = (string) $valor;

        //$valor2 = (boolean) $valor;

        $valor2 = (string) $valor;
        $valor3 = (int) $valor2;

        echo $valor. ' ' . gettype($valor);
        echo '<br>';
        echo $valor2. ' ' . gettype($valor2);
        echo '<br>';
        echo $valor3. ' ' . gettype($valor3);
    ?>
</body>
</html>