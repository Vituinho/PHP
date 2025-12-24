<a href="promocao-propriedade-construtor.php">Proxima aula</a>

<?php

    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: ".$destinatarios."<br>";
        echo "CC: ".$cc."<br>";
        echo "Assunto: ".$assunto."<br>";
        echo "Mensagem: ".$mensagem."<br>";
    }

    sendEmail(
        assunto: "Argumentos Nomeados",
        destinatarios: "jorge@argus-academy.com",
        mensagem: "Dominando a feature de argumentos nomeados do PHP 8"
    );

     echo "<hr>";

    /* convencional -> respeitando a ordem dos parâmetros*/
    sendEmail(
        "jorge@argus-academy.com",
        "teste@teste.com.br",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<hr>";

    sendEmail(
        "jorge@argus-academy.com",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

   

?>