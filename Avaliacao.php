<?php

Class Cliente {
    
    public function abre_conta() 
    {
        return "Abertura de conta";
    }
}

Class PF extends Cliente{
    
    public function abre_conta()
    {
        return "Abertura de conta Pessoa Física";
    }
}

Class PJ extends Cliente{
    
    public function abre_conta()
    {
        return "Abertura de conta Pessoa Jurídica";
    }
}

$Cliente1 = new PF();
$Cliente2 = new PJ();
$Cliente3 = new Cliente();

print $Cliente1->abre_conta();
print "\n";
print $Cliente2->abre_conta();
print "\n";
print $Cliente3->abre_conta();

?>
