<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <a href="app_help_desk/index.php">Proxima aula</a>

    
    <?php
        $numeros_array = [];

        for ($i = 0; $i < 6; ) {
            $array = [rand(1, 60)];
            if (!in_array($array, $numeros_array)) {
                $numeros_array[] = $array;
                $i++;
            }
        }
        print_r($numeros_array);

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $numeros = [];

        while (count($numeros) <= 5) {

            $num = rand(1, 60);
            if (!in_array($num, $numeros)) {
                $numeros[] = $num;
            }
        }

        print_r($numeros);
    ?>

</body>
</html>