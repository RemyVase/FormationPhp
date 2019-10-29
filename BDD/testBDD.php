<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-24
 * Time: 19:54
 */

try{
    //On se co à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    //Si il y a une erreur on affiche un message et ca stop le code
    die('Erreur : ' .$e->getMessage());
}

/*
$reponse = $bdd->query('SELECT * FROM jeux_video');

while ($donnees = $reponse->fetch()){
?>

    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br>
        Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros ! <br>
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum <br>
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
*/

$req = $bdd->prepare('SELECT nom,prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax ORDER BY prix;');
$req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

echo '<ul>';
while($donnees = $req->fetch()){

    echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' Eur)</li>';

}
echo '</ul>';

$req->closeCursor();

