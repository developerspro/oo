<?php 
include_once 'Cliente.php';
class ClienteVip extends Cliente { 
 public $bonus;
 public $pontos;


 function mostraDados()
 {
    parent::mostraDados();
    $this->p("Bonus: ".$this->bonus);
    $this->p("Pontos: ".$this->pontos);
 }
 /**
  * bonus a partir de 500 pontos
  * pontos expiram
  * niveis de bonus 5% 10% 15%
  */

  function somaPontos($novosPontos){
    $this->pontos =$novosPontos + $this->pontos;
    $this->verificaPontos();
  }

  function verificaPontos(){
    if($this->pontos >= 500 && $this->pontos<1000){
        $this->bonus = 0.05;
    } else  { 
        if($this->pontos>=1000){
            $this->bonus = 0.10;
        } else { 
            $this->p('Voce nao atingiu pontos suficentes para bonus');
            $this->bonus = 0;
        }
    }
  }

  public function expiraPontos($qtdPontosExp)
  {
    $this->pontos = $this->pontos - $qtdPontosExp;
    if($this->pontos<0){
        $this->pontos=0;
    }
    $this->verificaPontos();
  }
}