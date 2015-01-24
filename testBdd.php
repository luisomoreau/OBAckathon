<?php
/**
 * Created by PhpStorm.
 * User: HugoCOURME
 * Date: 24/01/2015
 * Time: 03:02
 */

$db =new PDO('mysql:host=localhost;dbname=obackathon','root','mysql',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$sql = "SELECT * FROM client " ;
$res = $db->query($sql);
$client =$res->fetch();

$manque=$client["manque"];

$sql = "SELECT * FROM offre WHERE descriptif='$manque'" ;
$res = $db->query($sql);
$offre =$res->fetch();

if(true);
{
    $idOffre=$offre['idOffre'];
    $text = 'idOffre';
    echo 'id de l\'Offre : '.$idOffre;
    echo '<br>descriptif de l\'offre : une '.$offre["descriptif"];
    echo '<br>ce que le client recherche : une '.$client["manque"];



    $sql = "INSERT INTO supportenvironement ($text) VALUE ('$idOffre')" ;
    $db->prepare($sql);
    $res  = $db->exec($sql);
}
