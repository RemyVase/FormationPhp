<?php

header ("Content-type: image/jpeg"); // On va créer une image jpeg

// On charge d'abordl es images
$source = imagecreatefrompng("logoZero.png");
$destination = imagecreatefromjpeg($_GET['image']);

//imagesx et imagesy renvoient la largeur et hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_dest = imagesx($destination);
$hauteur_dest = imagesy($destination);

//On veut placer le logo en bas à droite, on claclule les coordonnées où on doit placer le logo sur la photo
$destination_x = $largeur_dest - $largeur_source;
$destination_y = $hauteur_dest - $hauteur_source;

imagecopymerge($destination,$source,$destination_x,$destination_y,0,0, $largeur_source,$hauteur_source,60);

imagejpeg($destination);

?>

