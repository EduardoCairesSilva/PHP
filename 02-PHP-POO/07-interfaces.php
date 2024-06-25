<?php

    interface equipamentoEletronico {
        public function ligar();
        public function desligar();
    }

    class Tv implements equipamentoEletronico {
        public function ligar() {
            echo 'Tv está ligada';
        }

        public function desligar() {
            echo 'Tv está desligada';
        }
    }

$x = new Tv();
$x->ligar();
echo '<br>';
$x->desligar();

?>