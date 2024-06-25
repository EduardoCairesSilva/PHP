<?php

class Funcionario {
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    /*
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }
    */

    function resumirCadFunc() {
        return "$this->nome tem $this->numFilhos filho(s) e seu telefone é: $this->telefone, ele trabalha no cargo $this->cargo e seu salário é $this->salario";
    }

    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
};

$x = new Funcionario();
$x->__set('nome', 'José');
$x->__set('telefone', '11 9999-8888');
$x->__set('numFilhos', 3);
$x->__set('cargo', 'dev');
$x->__set('salario', 4000);
echo $x->resumirCadFunc();

?>