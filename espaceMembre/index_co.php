<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Site web</title>
</head>
<body>
<a href="http://localhost:8878/FormationPhp/espaceMembre/inscription.php">S'inscrire</a>
<a href="http://localhost:8878/FormationPhp/espaceMembre/connexion.php">Se connecter</a> <br/>
<p><?php
    echo 'Bienvenue sur mon site : ' . $_SESSION['pseudo'];
    ?>
</p>
</body>
</html>
</DOCTYPE>