<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-21
 * Time: 20:09
 */

session_start();

$_SESSION['prenom']='jean';
$_SESSION['nom']='marc';
$_SESSION['age'] = 25;
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> ! <br>
        Bienvenue sur l'accueil de ce site ! :D
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage.php</a>
        <a href="monsite.php">Lien vers monsite.php</a>
        <a href="mapage2.php">Lien vers mapage2.php</a>
    </p>
    </body>
</html>
