<?php

$fichierALire = 'input\input2.txt';
$inputFile = fopen($fichierALire,'r');

$tabEntree = [];
while($line = fgetcsv($inputFile)){

    $tabEntree[] = $line[0];
}
array_shift($tabEntree);
$frereA = 0;
$frereB = 0;
foreach ($tabEntree as $tour){
    $sousTab = explode(' ', $tour);
    $cardA = intval($sousTab[0]);
    $cardB = intval($sousTab[1]);

    
    if($cardA> $cardB ){
        $frereA += 1;
    } else{
        $frereB += 1;
    } 
}

if($frereA > $frereB){
    echo 'A';
} else{
    echo 'B';
}