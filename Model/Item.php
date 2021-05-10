<?php

class Item {
    var $id;
    var $nome;
    var $quantidade;
    var $dataInclusao;
    var $acervo;

    public function __construct() {}

    public function __set($propriedade, $valor) {
        $this->propriedade = $valor;
    }

    public function __get($propriedade) {
        return $this->propriedade;
    }
}
?>