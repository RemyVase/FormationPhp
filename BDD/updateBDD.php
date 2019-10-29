<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-27
 * Time: 20:41
 */


try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

/*
$bdd-> exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'');
echo 'La base de données du jeu a bien été modifiée';

$nb_modifs = $bdd -> exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo $nb_modifs . ' entrées modifiées dans la BDD';
*/

$req = $bdd->prepare('UPDATE jeu_video SET prix = :nvprix, nbre_joueurs_max = :nv_nbre_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
    'nvprix' => $nvprix,
    'nv_nbre_joueurs' => $nv_nbre_joueurs,
    'nom_jeu' => $nom_jeu
));
