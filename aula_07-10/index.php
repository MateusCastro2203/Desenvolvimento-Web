<?php
    include("pessoa.php");
    $pessoa1 = new Pessoa("Mateus","Castro","20");

    echo $pessoa1->getNome()."<br />";

    $pessoa2 = new Pessoa ("Giulia","Ornelas","18");

    echo "Idade antes: ".$pessoa2->getIdade()."<br />";
    $pessoa2->setIdade(19);
    echo "Idade depois: ".$pessoa2->getIdade()."<br />";

    $json = json_encode($pessoa2);
    echo $pessoa2."<br>";
    echo $json."<br>";
    echo $pessoa1."<br>";
?>