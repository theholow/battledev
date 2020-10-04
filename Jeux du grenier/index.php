<?php

$fichierALire = 'input\input2.txt';
$inputFile = fopen($fichierALire,'r');

$tabEntree = [];
while($line = fgetcsv($inputFile)){

    $tabEntree[] = $line[0];
}
array_shift($tabEntree);
$newestGame = null;
$diffMax = 0;

foreach($tabEntree as $diff){
    if($diff>$newestGame){
        $newestGame = $diff;
    }
    if($diffMax < ($newestGame-$diff)){
        $diffMax = $newestGame - $diff;
    }
}

echo $diffMax;