<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Mon Blog</title>
            <link href="style.css" rel="stylesheet">
        </head>
        <body>
        <p>
            <h1>Mon super blog</h1>
            <p>derniers billets du blog : </p>
        </p>
        <?php
            try{
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
            }
            catch(Exception $e){
                die('ERREUR : ' . $e->getMessage());
            }

            $reponse = $bdd->query('SELECT id,titre,contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') as date_creation FROM billets ORDER BY date_creation DESC LIMIT 0,5');

            while($donnees = $reponse->fetch()){
        ?>
            <?php include('billets.php'); ?>
                <br />
                <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
            }

            $reponse->closeCursor();
        ?>

        </body>
    </html>
</DOCTYPE>
