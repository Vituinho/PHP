<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <a href="ifelse_praticando_mais_um_pouco.php">Proxima aula</a>
    <?php
     
    //operadores condicionais/comparação
    //==
    //===
    //!= ou <>
    //!==
    //<
    //>
    //<=
    //>=

    //operadores lógicos
    //E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros
    //OU: || ou OR -> retorna verdadeiro se pelo menos um dos retornar verdadeiro
    //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e outra falsa ou vice-versa
    //!

    //() estabelecer precedência
    //f e v = f
    if((22 == 22 && 3 == 3) || 5 != 5) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    ?>
</body>
</html>