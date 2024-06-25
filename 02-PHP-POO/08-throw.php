<?php

class minhaClasseException extends Exception {
    private $erro = '';

    public function __construct($erro) {
        return $this->erro = $erro;
    }

    public function minhaMensagem() {
        echo $this->erro;
    }
}


try {
    throw new minhaClasseException('Esse é um erro de teste');
} catch (minhaClasseException $e) {
    $e->minhaMensagem();
}
