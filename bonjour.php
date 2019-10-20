<?php
    if(isset($_GET['prenom']) AND isset($_GET['nom'])){
        for($i = 0; $i < $_GET['repeter']; $i++){
            echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . '<br>';
        }
    }
    else{
        echo 'Vous avez oublié de renseigner un champs.';
    }
