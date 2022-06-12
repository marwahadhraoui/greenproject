<?php
//connexion a la bdd
require_once("benne.php");
$ben=new benne();
$id=$_REQUEST['dd'];
$r=$ben->modifier($id);
if($r){
    echo '<script type="text/javascript">alert("Benne validée avec succés");window.location = "../forms/listebenne.php";</script>';
}

else{
  
    echo '<script type="text/javascript">alert("Cette benne est deja validée");window.location = "../forms/listebenne.php";</script>';
}

?>