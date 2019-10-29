<?php
/**
 * Created by PhpStorm.
 * User: remyvase
 * Date: 2019-10-27
 * Time: 21:15
 */

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO minichat (pseudo,message) VALUES(?,?)');
$req->execute(array(
    $_POST['pseudo'],
    $_POST['message']
));

header('Location:http://localhost:8878/FormationPhp/tpMinichat/minichat.php?');
?>