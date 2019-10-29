<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-27
 * Time: 20:21
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$bdd->exec('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES(\'Battlefield 1942 \',\'Patrick\', \'PC\',45,50,\'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';