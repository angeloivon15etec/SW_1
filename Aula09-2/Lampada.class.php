<?php
   class Lampada{
       public $fabricante;
       public $Tensao;
       public $Potencia;
       public $Cor;
       public $Status;

       public function Ligar(){
        $this->Status = True;

       }
       public function Desligar(){
          $this->Status =  false;


       }
       public function MostrarDados(){
        echo "o fabricante é: ". $this->fabricante. "<br>";
        echo "A Tensao é: ". $this->Tensao. "<br>";
        echo "A Potencia é: ". $this->Potencia. "<br>";
        echo "A Cor é: ". $this->Cor. "<br>";
        if ($this->Status == 1){
            echo "o status é: LIGADA! <br>";
        }else{
            echo "o status é: DESLIGADA <br>";
        }

       }


   }



?>