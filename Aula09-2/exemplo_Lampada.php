<?php
    include_once "Lampada.class.php";

   $lamp1 = new Lampada();
   
   $lamp1->fabricante = "phillips";
   $lamp1->Tensao = "110";
   $lamp1->potencia = "50";
   $lamp1->Cor = "Branca";

    $lamp1->MostrarDados();
   $lamp1->ligar();

      $lamp1->MostrarDados();
       $lamp1-> desligar()


?>