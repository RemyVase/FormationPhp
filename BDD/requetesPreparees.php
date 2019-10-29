<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-27
 * Time: 20:36
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$req = $bdd ->prepare('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES(:nom,:possesseur,:console,:prix,:nbre_joueurs_max,:commentaires)');

$req->execute(array(
    'nom' => $nom,
    'possesseur' => $possesseur,
    'console' => $console,
    'prix' => $prix,
    'nbre_joueurs_max' => $nbre_joueurs_max,
    'commentaires' => $commentaires
));

echo 'Le jeu a bien été ajouté ! ';

?>