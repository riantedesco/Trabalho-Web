<?php

class Usuario {
    var $id;
    var $nome;
    var $sobrenome;
    var $idade;
    var $email;
    var $senha;

    public function __construct() {}

    public function __set($propriedade, $valor) {
        $this->propriedade = $valor;
    }

    public function __get($propriedade) {
        return $this->propriedade;
    }
}
?>