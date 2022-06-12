<?php
//connexion a la bdd
require_once("request.php");
$ben=new request();
$id=$_REQUEST['dd'];
$r=$ben->modifier($id);
if($r)
{  echo '<script type="text/javascript">alert("Demande validée avec succés");window.location = "../forms/listereq.php";</script>';
}
else
{  echo '<script type="text/javascript">alert("Demande deja validée");window.location = "../forms/listereq.php";</script>';
}
?>