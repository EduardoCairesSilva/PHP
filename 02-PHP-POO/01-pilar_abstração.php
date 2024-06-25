<?php

class Funcionario
{
    public $nome = 'José';
    public $telefone = "11 9999-8888";
    public $numFilhos = 2;

    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filhos(s) e tem o telefone $this->telefone";
    }

    function modificarNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }
};

$y = new Funcionario();
echo $y->resumirCadFunc();
echo "<br>";
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();

?>
