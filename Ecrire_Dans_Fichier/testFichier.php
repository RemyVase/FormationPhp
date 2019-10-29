<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-21
 * Time: 20:44
 */

// On ouvre le fichier
$monFichier = fopen('compteur.txt','r+');

//Actions à effectuer sur le fichier

$pages_vues = fgets($monFichier);
$pages_vues += 1;
fseek($monFichier,0);
fputs($monFichier,$pages_vues);


//On ferme le fichier
fclose($monFichier);

echo '<p> Cette page a été vue : ' .$pages_vues .' fois. </p>';