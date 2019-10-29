<?php
//Création du cookie reprennant le pseudo de la personne qui a envoyé le dernier message.
setcookie('pseudo',$_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

//Connexion à la base de donnée
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e){
    die('ERREUR : ' . $e->getMessage());
}

//On prépare une requete sql pour envoyer dans la bdd le pseudo ainsi que le message de la personne ( Pas la date car current_dateTime
$req=$bdd->prepare('INSERT INTO minichat (pseudo,message) VALUES (?,?)');
$req->execute(array(
    $_POST['pseudo'],
    $_POST['message']
));

//Redirection vers la page minichat.
header('Location:http://localhost:8878/FormationPhp/minichatAmeliore/minichat.php?');
//header('Location:minichat.php');

?>