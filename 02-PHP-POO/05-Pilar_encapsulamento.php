<?php

class Pai
{
    private $nome = 'José';
    protected $sobrenome = 'Alves';
    public $idade = 23;

    public function __set($attr, $value)
    {
        return $this->$attr = $value;
    }

    public function __get($attr)
    {
        return $this->$attr;
    }

    private function executarAcao()
    {
        echo 'Assobiar';
    }

    protected function responder()
    {
        echo 'Ola';
    }

    public function renderizarAcao()
    {
        $x = rand(1, 10);

        if ($x = 1 && $x <= 5) {
            $this->executarAcao();
        } else {
            $this->responder();
        }
    }
}

class Filho extends Pai
{
    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</ pre>';
    }
}

$pessoa = new Pai();
$pessoa->renderizarAcao();
echo '<br>';
$filho = new Filho();
