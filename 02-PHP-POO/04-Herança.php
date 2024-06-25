 <?php

    class Veiculo {

        public $placa = 'ABCD1234';
        public $cor = 'Preto';
        
        function acelerar() {
            echo "Está acelerando";
        }
    }

    class Carro extends Veiculo {

        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Teto solar aberto';
        }

        function alterarPosicaoVolante() {
            echo 'Alterando a posição do volante';
        }
    }

    class Moto extends Veiculo {

        public $contra_peso_guidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Está empinando';
        }
    }

$carro = new Carro('BCD3211', 'Preto');
$moto = new Moto('FSD4324', 'Vermelho');

echo "<pre>";
print_r($carro);
echo "</pre>";
echo '<br>';
echo "<pre>";
print_r($moto);
echo "</pre>";

?>