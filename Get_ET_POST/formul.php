<?php
//Affichage du formulaire de base.
    if(!isset($_POST['password'])){
        echo '<p> Entrez le mot de passe pour accéder à la page secrete ! <br> 
                <form action="formul.php" method = "post">
                    <input type="password" name="password">
                    <input type="submit" name="valider">
                </form>
            </p>';
    }
    //Affichage si le mot de passe est incorrect.
    elseif(htmlspecialchars($_POST['password']) != 'kangourou'){
        echo '<p> Entrez le mot de passe pour accéder à la page secrete ! <br> 
                <form action="formul.php" method = "post">
                    <input type="password" name="password">
                    <input type="submit" name="valider">
                </form>
            </p><br>
            <p>MOT DE PASSE INCORRECT</p>';
    }
    //Affichage si le mot de passe est correct.
    else{
        echo 'Bienvenue dans la chambre des secrets Harry, ici tu affronteras celui dont nul ne peut prononcer le nom !';
    }
