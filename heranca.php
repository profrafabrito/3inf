<?php

class Forma {
    
    public function figura() {
        return ("isso é uma figura");
    }
}

class Circulo extends Forma{
    /////
}

class Retangulo extends Forma
{
    public function figura() {
        return ("isso é um retangulo");
    }
}


$Forma1 = new Forma();
$Forma2 = new Circulo();
$Forma3 = new Retangulo();

print $Forma1->figura();
print $Forma2->figura();
print $Forma3->figura();

?>
