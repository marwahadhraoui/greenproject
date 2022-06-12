<?php
//connexion a la bdd
require_once("benne.php");
$ben=new benne();
$id=$_REQUEST['dd'];
$r=$ben->supprimer($id);
if($r)
{ echo '<script type="text/javascript">alert("Benne supprimée avec succés");window.location = "../forms/listebenne.php";</script>';}
else
{ echo '<script type="text/javascript">alert("erreur de suppression");window.location = "../forms/listebenne.php";</script>';}
?>