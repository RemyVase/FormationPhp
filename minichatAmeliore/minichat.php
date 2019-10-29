<!DOCTYPE html>
    <html>
        <form align="center" method="post" action="minichat_post.php">
            <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo']; ?>"> <br />
            <label for="message">Message : </label><input type="text" name="message" id="message"> <br />
            <input type="submit" value="ENVOYER">
        </form>
    </html>
</DOCTYPE>

<?php
//connexion à la base de donnée.
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    }
    catch(Exception $e){
        die('ERREUR : ' . $e->getMessage());
    }
//Requête pour récupérer les messages avec pseudo et date.
    $req=$bdd->query('SELECT pseudo,message,DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') as date_envoi FROM minichat ORDER BY date_envoi DESC LIMIT 0,10');

    //Lecture des lignes récupérée par la requêtes
    while($donnees = $req->fetch()){
        echo  '[' . $donnees['date_envoi'] . ']  <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '<br />';
    }

    //fermeture du fetch
    $req->closeCursor();

?>