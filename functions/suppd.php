<?php
//connexion a la bdd
require_once("depot.php");
$d=new depot();
$id=$_REQUEST['dd'];
$r=$d->supprimer($id);
if($r)
{  echo '<script type="text/javascript">alert("Demande validée avec succés");window.location = "../forms/listedepot.php";</script>';
}
else
{  echo '<script type="text/javascript">alert("erreur de suppression");window.location = "../forms/listedepot.php";</script>';
}

?>