<?php

$fichierALire = 'input\input1.txt';
$inputFile = fopen($fichierALire, 'r');

$tabEntree = [];
while ($line = fgetcsv($inputFile)) {

    $tabEntree[] = $line[0];
}
array_shift($tabEntree);
$tabPalindrome = [];
    //Parcourir le tableau
    foreach ($tabEntree as $word) {
        //stocker dans une variable le mot inversé
        $motinverse = strrev($word);
        //si le mot inversé est le même que le mot à l'endroit alors palindrome
        if ($motinverse == $word) {
            //Stocker le palindrome dans un nouveau tableau contenant tout les palindromes
            array_push($tabPalindrome, $word);
        }
    }
var_dump($tabPalindrome);
$chaine = implode(' ',$tabPalindrome);
echo $chaine;

