<?php
// Classe Pai
abstract class Carro {
    
  public $nome;
  
  public function __construct($nome) {
    $this->nome = $nome;
  }
  
  public function get_nome(){
      return $this->nome;
  }
  
  public function set_nome($nome){
      $this->nome = $nome;
  }
  
  abstract public function intro() : string;
}

// Classes filhas
class Audi extends Carro {
    
  public function intro() : string {
    return "Orgulho de ser alemão, eu sou um $this->nome!";
  }
  
}

class Volvo extends Carro {
    
  public function intro() : string {
    return "Orgulho de ser suiço, eu sou um $this->nome!";
  }
}

class Citroen extends Carro {
    
  public function intro() : string {
    return "Orgulho de ser francês, eu sou um $this->nome!";
  }
}

// Cria objetos das classes filhas
$Carro1 = new audi("Audi");
print $Carro1->intro();
print "\n";

$Carro2 = new volvo("Volvo");
print $Carro2->intro();
print "\n";


$Carro3 = new citroen("Citroen");
print $Carro3->intro();
print "\n";

//Consulta de dados
print $Carro2->get_nome();
print "\n";

//Manutenção de dados
$Carro1->set_nome('Audio A3');
print $Carro1->intro();

?>