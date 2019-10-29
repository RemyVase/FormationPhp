<!DOCTYPE html>
    <html>
    <form action="minichat_post.php" method="post">
        <label for="pseudo">Pseudo</label> : <input type="text" name ="pseudo" id="pseudo"> <br>
        <label for="message">Message</label> : <input type="text" name="message" id="message"> <br>
        <input type="submit" value="Envoyer"> <br>
    </form>
    </html>
</DOCTYPE>

<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$reponse =$bdd->query('SELECT pseudo,message FROM minichat ORDER BY id DESC LIMIT 0,10');

while($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']). '</p>';
}

$reponse->closeCursor();
?>


