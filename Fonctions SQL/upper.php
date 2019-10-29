<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-28
 * Time: 12:22
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$reponse = $bdd->query('SELECT AVG(prix) as nbconsoles FROM jeux_video');

while($donnees = $reponse->fetch()){
    echo $donnees['nbconsoles'] .'<br>';
}

$reponse->closeCursor();

?>