<?php
        $vloc = $_POST['location'];
        $vstor = $_POST['storage'];
       

        require_once("benne.php");
        $benne = new benne();
        $benne->setloc("$vloc");
        $benne->setstoc("$vstor");
        $retour = $benne->ajouter();
        header("location:../forms/ajoutbenne.php?retour=$retour");
?>
