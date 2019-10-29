<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-21
 * Time: 20:15
 */

session_start();

?>

<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de mapage.php</title>
    </head>
    <body>
    <p>
        Encore toi vilain petit <?php echo $_SESSION['prenom']; ?>. Que fais donc tu encore la ?
    </p>
    </body>
    </html>
</DOCTYPE>
