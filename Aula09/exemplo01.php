<?php
include_once 'Pessoa.class.php';

    //Instancia de um objeto (uma pessoa)
$Pessoa1 = new Pessoa;
$Pessoa2 = new Pessoa;

 //var_dump($Pessoa1)

    //atribuição de valores para o objeto
    $Pessoa1->Nome = 'fulano';
    $Pessoa1->Altura = 1.85;
    $Pessoa1->Peso = 85;

    $Pessoa2->Nome = 'Maria';
    $Pessoa2->Altura = 1.55;
    $Pessoa2->Peso = 50;
    
    //Chamando um metodo da classe
    $Pessoa1->MostrarDados();
    $Pessoa2->MostrarDados();


?>