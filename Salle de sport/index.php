<?php

$fichierALire = 'input\input1.txt';
$inputFile = fopen($fichierALire, 'r');

$tabEntree = [];
while ($line = fgetcsv($inputFile)) {

    $tabEntree[] = $line[0];
}

$borninf = $tabEntree[0];
$bornesup = $tabEntree[1];
$diviseur = $tabEntree[2];
$motdepasse = 0;
array_shift($tabEntree);
foreach($tabEntree as $mdp){
    if(($mdp % $diviseur) == 0){
        $motdepasse = $mdp;
    break;
    }
}

echo $motdepasse;

