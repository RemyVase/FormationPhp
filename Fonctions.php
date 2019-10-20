<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-16
 * Time: 18:29
 */

$phrase = 'Bonjour tout le monde, je m\' appel Rémy et j\'ai 22 ans.';
$longueur = strlen($phrase);

echo 'Ma phrase contient : ' . $longueur . ' caractères. <br>';

$ma_variable = str_replace('b','p' ,'bim bam boum');
echo $ma_variable . '<br>';

$chaine = 'Bonjour';
echo str_shuffle($chaine) . '<br>';

$chaine1 = 'MOI JE VEUX CHAUSSURES !!!!';
echo strtolower($chaine1) . '<br>';

$date = date('H') + 2;
echo $date . '<br>';




/*
function direBonjour($nom){
    echo 'Bonjour ' . $nom . ' et bienvenue sur mon site !';
}

direBonjour('Josée');

*/

function calculeVolumeCone($rayon,$hauteur){
    return ($rayon * $rayon) * pi() * $hauteur * (1/3);
}

echo calculeVolumeCone(2,2);


