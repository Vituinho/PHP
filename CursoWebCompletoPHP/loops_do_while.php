<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <a href="loops_for.php">Proxima aula</a>
    
    <?php

        $x = 10;
        do {
            echo "X = $x <br>";

            $x++; //critério de parada

            //continue
            //break
        } while($x < 9);
        /*
        echo '<br>';
        while($x < 9) {
            echo 'Entrou no while';
        }
            */
        

    ?>

</body>
</html>