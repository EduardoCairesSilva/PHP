<?php

    class Exemplo {
        public static $atributo1 = 'Estático';
        public $atributo2 = 'Não estático';

        public static function metodo1() {
            echo 'teste';
        }

        public function metodo2() {
            echo 'teste2';
        }
    }


echo Exemplo::$atributo1;
echo '<br>';
Exemplo::metodo1();

?>