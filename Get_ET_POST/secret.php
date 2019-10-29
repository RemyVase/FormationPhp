<?php
    if(isset($_POST['password']) AND htmlspecialchars($_POST['password']) != 'kangourou'){
        echo 'Ce n\'est pas le bon mot de passe ! Qui êtes-vous ? Sortez donc de poudlard !';
    }
    else{
        echo 'Bienvenue dans la chambre des secrets Harry, ici tu affronteras celui dont on ne peut prononcer le nom !';
    }
?>
