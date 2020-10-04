<?php

$fichierALire = 'input\input2.txt';
$inputFile = fopen($fichierALire,'r');

$tabEntree = [];
while($line = fgetcsv($inputFile)){

    $tabEntree[] = $line[0];
}

if ($tabEntree[0] >= 10){
    echo "JOB";
}else {
    echo "ECHEC";
};