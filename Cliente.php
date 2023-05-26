<?php 
include_once "Pessoa.php";
class Cliente extends Pessoa{
public $codCliente;

public function __construct($nome)
{
    $this->nome = $nome;
}
}