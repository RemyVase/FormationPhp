<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-27
 * Time: 20:57
 */




try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$reponse = $bdd->query('SELECT nom from jeux_videos') or die(print_r($bdd->errorInfo()));

//die c'est comme un exit ca coupe le programme et affiche l'erreur.