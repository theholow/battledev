<?php

$fichierALire = 'input\input3.txt';
$inputFile = fopen($fichierALire,'r');

$tabEntree = [];
while($line = fgetcsv($inputFile)){

    $tabEntree[] = $line[0];
}

//Combien je peux faire de kilomètre avec 1 plein
$capaciteReservoir = $tabEntree[0];
$consommation = $tabEntree[1];

$distanceQueJePeuxParcourir = ($capaciteReservoir / $consommation) * 100;

array_shift($tabEntree);
array_shift($tabEntree);

$stationPrecedente = 0;
foreach($tabEntree as $station){

    if(($station - $stationPrecedente)>$distanceQueJePeuxParcourir){
        echo 'KO';
    break;
    }
    else{
        echo 'ok';
        $stationPrecedente = $station;
    }
}
