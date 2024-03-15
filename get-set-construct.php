<?php

class Carro {
    
    public $placa;
    public $nome;
    
    //método construtor 
    public function __construct($placa, $nome){
        $this->placa = $placa;
        $this->nome = $nome;
    }
    
    function get_placa(){
        return $this->placa;
    }
    
    function set_placa($placa){
        $this->placa = $placa;
    }
    
    
    function get_nome(){
        return $this->nome;
    }
    
    function set_nome($nome){
        $this->nome = $nome;
    }
}

//instanciar novo objeto
$Fusca = new Carro('Gol', 'YYY-0000');

$Fusca->set_nome('Fusca');
$Fusca->set_placa('XXX-0000');

print $Fusca->get_nome();
print $Fusca->get_placa();

?> 







