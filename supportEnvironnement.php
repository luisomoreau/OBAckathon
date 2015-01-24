<?php
/**
 * Created by PhpStorm.
 * User: HugoCOURME
 * Date: 24/01/2015
 * Time: 04:22
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

$idOffre=$offre["idOffre"];
$sql= "SELECT * FROM supportenvironement WHERE idOffre='$idOffre'" ;
$res = $db->query($sql);
$idOffreSupport = $res->fetch();

if($idOffreSupport!=false )
{
    echo '<br><p>Descriptif de l\'offre : une '.$offre["descriptif"].'</p>';
    echo '<br><p>Ce que le client recherche : une '.$client["manque"].'</p>';
    echo '<br><p>La borne a reconnue l\'id de l\'offre : '.$idOffreSupport["idOffre"].' et affiche une publicité ciblé sur le client</p>';


}
else
{
    echo '<br><p>Ce que le client cherchait est une : '.$client["manque"].'</p>';
    echo '<br><p>Mais pour le moment la borne n\'affiche rien...</p>';
}