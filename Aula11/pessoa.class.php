<?php
 class produto{
    private $nome;
    private $preco;
    private $quant;


    public function __construct($nome , $preco , $quant){
        $this->Name = $nome;
        $this->valor = $preco;
        $this->qnt = $quant;
    }
    public function getNome(){
        return $this->nome;

    }
    public function getpreco(){
        return $this->preco;

    }
    public function adicionarestoque($quant){
        if($quant>0){

        }
    }

    public function MostrarDados(){
        echo"O nome do produto é"+$this->Name+"<br>";
        echo"O valor do produto é"+$this->valor+"<br>";
        echo"a quantia do produto é"+$this->qnt+"<br>";

    }


 }
?>