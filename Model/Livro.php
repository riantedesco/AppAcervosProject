<?php

class Livro{
    var $nome;
    var $autor;
    var $genero;
    var $editora;
    var $anoLancamento;
    var $preco;

    public function __construct() {}

    public function __set($propriedade, $valor) {
        $this->propriedade = $valor;
    }

    public function __get($propriedade) {
        return $this->propriedade;
    }
}
?>