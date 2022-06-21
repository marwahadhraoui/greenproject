<?php
include "connection.php";
$title = $_POST['title'];
$Volume = $_POST['volume'];
$gouvernorat = $_POST['gouvernorat'];
$Message = $_POST['message'];


$req = "INSERT INTO request(categorie,volume,location,note,req_title,isValid) VALUES('plants','$Volume','$gouvernorat','$Message','$title','0')";

$ok = mysqli_query($idcon, $req);

if ($ok == FALSE) {
    echo "problème d'insertion";
} else {
    //echo "Insertion effectuée avec succès";
    echo("<meta http-equiv='refresh' content='1'>");

}
