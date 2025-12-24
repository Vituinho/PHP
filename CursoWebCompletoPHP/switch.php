<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <a href="casting_tipos.php">Proxima aula</a>
    <?php 
    $parametro = true;
        switch ($parametro) {
            case 1:
                echo'Entrou no case 1';
                break;
            case 'abc':
                echo'Entrou no case 2';
                break;
            case false:
                echo'Entrou no case 3';
                break;
            default:
                echo'Entrou no default';
                break;
        }
    ?>

</body>
</html>