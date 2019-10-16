<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-16
 * Time: 16:02
 */

$age = 13;

if($age <= 12){
    echo "Salut gamin ! Bienvenue sur ce magnifique site ! Amuses toi bien ! <br/>";
    $autorisation_entrer = "oui";
}
else{
    echo "Bonjour monsieur, ce site est réservé aux enfants. Vous ne pouvez pas rentrer. <br/>";
    $autorisation_entrer = "non";
}

echo "Avez-vous l'autorisation de rentrer ? La réponse est : " . $autorisation_entrer;


