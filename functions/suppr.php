<?php
//connexion a la bdd
require_once("request.php");
$ben=new request();
$id=$_REQUEST['dd'];
$r=$ben->supprimer($id);
if($r)
{  echo '<script type="text/javascript">alert("Demande supprimée avec succés");window.location = "../forms/listereq.php";</script>';
}
else
{  echo '<script type="text/javascript">alert("Erreur de suppression");window.location = "../forms/listereq.php";</script>';
}
?>