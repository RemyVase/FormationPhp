<?php

//header ("Content-type: image/png");

/*$image = imagecreate(200,200);

$orange = imagecolorallocate($image,255,128,0);
$bleu = imagecolorallocate($image,0,0,255);
$bleuClair = imagecolorallocate($image,156,227,254);
$noir = imagecolorallocate($image,0,0,0);
$blanc = imagecolorallocate($image,255,255,255);

imagestring($image,5,75,85,'EPHEC',$blanc);

imagesetpixel($image,100,100,$noir);

imageline($image,50,100,150,100,$noir);

imageellipse($image,100,100,100,50,$noir);

imagerectangle($image,30,30,150,150,$noir);

imagecolortransparent($image,$orange);

imagepng($image);*/


//redimenssionner une image
$source = imagecreatefromjpeg("coucherSoleil.jpg");
$dest = imagecreatetruecolor(200,150);

$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_dest = imagesx($dest);
$hauteur_dest = imagesy($dest);

imagecopyresampled($dest,$source,0,0,0,0, $largeur_dest, $hauteur_dest,$largeur_source,$hauteur_source);

imagejpeg($dest, "images/mini_coucherSoleil.jpg");

