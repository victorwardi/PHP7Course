
<?php

class Endereco{
    
    private $rua;
    private $numero; 
    private $cidade;

    public function __construct($r, $n, $c){

        $this->rua = $r;
        $this->numero = $n;
        $this->cidade = $c;
    }
    public function __toString(){
        return "My address is: " . $this->rua . ", " . $this->numero . " -  " . $this->cidade;
    }

}

$meuEndereco = new Endereco("Rua da Silva", 30, "Niterói");

echo $meuEndereco;

?>