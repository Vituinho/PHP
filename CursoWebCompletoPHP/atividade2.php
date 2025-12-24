<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <a href="funcoes_strings.php">Proxima aula</a>

    <?php
    function calcularImpostoRenda($valor)
    {
        $aliquota = 0;
        if ($valor <= 1903.98) {
            $aliquota = 0;
        } else if ($valor >= 1903.99) {
            $aliquota = $valor * (7.5 / 100);
        } else if ($valor >= 2826.66) {
            $aliquota = $valor * (15 / 100);
        } else if ($valor >= 3751.06) {
            $aliquota = $valor * (22.5 / 100);
        } else {
            $aliquota = $valor * (27.5 / 100);
        }
        return $aliquota;
    }

    echo calcularImpostoRenda(3751.06);
    ?>

</body>

</html>