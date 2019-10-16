<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-16
 * Time: 17:47
 */

$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);

/*
foreach($coordonnees as $cle => $element){
    echo $cle . ' : ' . $element . '<br>';
}

echo '<pre>';
print_r($coordonnees);
echo '</pre>';
*/

if(array_key_exists('prenom', $coordonnees)){
    echo "La clef 'prenom' existe bien dans l'array coordonnees. <br>";
}


if(in_array('François',$coordonnees)){
    echo "Le prénom François existe bien dans l'array coordonnees. <br>";
}

$fruits = array('cerise','banane','pomme','poire','abricot');

if(!array_search('fraise',$fruits)){
    echo "Il n'y a pas de fraise dans ton array ! ";
}

//echo array_search('fraise',$fruits);
