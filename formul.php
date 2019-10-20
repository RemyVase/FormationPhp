<?php
    if(!isset($_POST['password']) OR htmlspecialchars($_POST['password']) != 'kangourou'){
        echo '<p> Entrez le mot de passe pour accéder à la page secrete ! <br> 
                <form action="formul.php" method = "post">
                    <input type="password" name="password">
                    <input type="submit" name="valider">
                </form>
            </p>';
    }
    else{
        echo 'Bienvenue dans la chambre des secrets Harry, ici tu affronteras celui dont nul ne peut prononcer le nom !';
    }
