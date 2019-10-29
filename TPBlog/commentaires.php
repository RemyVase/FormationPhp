<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Commentaires de billet</title>
            <link href="style.css" rel="stylesheet">
        </head>
        <body>
        <a href="http://localhost:8878/FormationPhp/TPBlog/index.php">Retour aux billets</a>
        <?php
        //connexion bdd
            try{
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
            }
            catch(Exception $e){
                die('ERREUR : ' . $e->getMessage());
            }

            //Requete sql pour récupérer les infos du billet demandé.
            $req = $bdd->prepare('SELECT id,titre,contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM billets WHERE id = ?');
            $req->execute(array($_GET['billet']));

            while($donnees = $req->fetch()) {
                if(empty($donnees['titre'])){
                    print 'Ce billet n\'existe pas !';
                } else {
                    include('billets.php');
                    echo '</p> </div>';
                }
            }
            //fermeture du fetch
            $req->closeCursor();

            //Requete pour récupérer les commentaires
            $req = $bdd->prepare('SELECT id_billet,auteur,commentaire,DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM commentaires WHERE id_billet = ? ORDER BY id DESC');
            $req->execute(array($_GET['billet']));
            while($donnees = $req->fetch()) {
                    ?>

                    <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong>
                        le <?php echo $donnees['date_creation']; ?></p>
                    <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
                    <?php
            }
            $req->closeCursor();
        ?>

        </body>
    </html>