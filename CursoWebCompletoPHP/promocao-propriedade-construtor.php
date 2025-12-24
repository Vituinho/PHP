<a href="correspondencia-expressao.php">Proxima aula</a>

<?php
    /*
    class Produto {
        public string $nome = "";
        public float $valor = 0;

        public function __construct($nome, $valor) {
            $this->$valor = $valor;
            $this->$nome = $nome;
        }
    }
    */

    class Produto {
        public function __construct(
            public string $nome = "",
            public float $valor = 0
        ){}
    }

    $produto = new Produto(valor: 1500, nome: 'Smartphone');

    echo "Produto: ".$produto->nome;
    echo '<br>';
    echo "Valor: ".$produto->valor;

    echo '<hr>';

    $produto = new Produto('Geladeira', 2500);

    echo "Produto: ".$produto->nome;
    echo '<br>';
    echo "Valor: ".$produto->valor;

?>