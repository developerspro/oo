<?php
class Pessoa {
    public $nome;
    public $telefone;
    public $email;
    public $endereco;
    public $dependentes; 

   
    public function mostraDados(){
        $this->p($this->nome);
        $this->p($this->telefone);
        $this->p($this->email);
        $this->p($this->endereco);
        $this->p($this->dependentes);

    }

    function p($dados){
        echo $dados."<br>";
    }
}