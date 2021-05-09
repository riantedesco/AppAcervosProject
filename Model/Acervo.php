<?php

class Acervo {
    var $id;
    var $titulo;
    var $conteudo;
    var $dataLancamento;
    var $user;

    public function __construct() {}

    public function __set($propriedade, $valor) {
        $this->propriedade = $valor;
    }

    public function __get($propriedade) {
        return $this->propriedade;
    }
}
?>