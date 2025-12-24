<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <a href="atividade2.php">Proxima aula</a>
    
    <?php
        //void (sem retorno)
        function exibirBoasVindas() {
            echo 'Bem-vindo ao curso de PHP! <br>';
        }

        exibirBoasVindas();

        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
            
        }

        $resultado = calcularAreaTerreno(5, comprimento: 25);
        echo $resultado;
        
    ?>

</body>
</html>