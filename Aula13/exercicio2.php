<?php
    include_once 'Aluno.class.php';
    
    $fulero = new Aluno("ambrosio",8,6);

    $Nota1 = $fulero->getnota1();
    $Nota2 = $fulero->getnota2();
    $Nome = $fulero->getnome();
   // echo $Nota1;

    $media = $fulero->CalculaMedia($Nota1,$Nota2);

    echo "NOME DO ALUNO: ".$fulano->getnome() . "<br>'"
    echo "MEDIA : " . $media ."<br>";
    echo "SITUAÇÃO". $fulero->VerificarSituacao($media)."<br>";
    echo "<hr>";


?>