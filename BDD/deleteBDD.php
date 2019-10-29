<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-27
 * Time: 20:53
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$bdd->exec('DELETE FROM jeux_video WHERE nom = \'Battlefield 1942\'');
echo 'Le jeu a bien été supprimé de la BDD';