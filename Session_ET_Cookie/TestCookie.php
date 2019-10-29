<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-21
 * Time: 20:21
 */

setcookie('prenom','DANIEL',time() + 365*24*3600,null,null,false,true);
setcookie('nom','MICHAUX',time() + 365*24*3600,null,null,false,true);

?>
<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Titre de TestCookie</title>
        </head>
        <body>
            <p>
                Kediss madame <?php echo $_COOKIE['prenom'] .' ' . $_COOKIE['nom']; ?> ? Z'êtes à votre aise d'ou ci ?
            </p>
            <p>
                <a href="testCookie2.php">Aller vers testCookie2</a>
            </p>
        </body>
    </html>
</DOCTYPE>