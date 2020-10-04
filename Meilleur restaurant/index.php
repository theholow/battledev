<?php

$fichierALire = 'input\input1.txt';
$inputFile = fopen($fichierALire,'r');

$tabEntree = [];
while($line = fgetcsv($inputFile)){

    $tabEntree[] = $line[0];
}

array_shift($tabEntree);
//Parcourir le tableau
$tabDecoupe = [];

foreach($tabEntree as $score){
    $conversion = intval($score);
    explode(" ",$conversion);
    array_push($tabDecoupe, $conversion);
}

var_dump($tabDecoupe);
//Comparer le score courant au plus élevé enregistré



//Le scoremax = scorecourant si scorecourant > scoremax


//sortir le plus élevé et l'arrondir

