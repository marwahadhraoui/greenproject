<?php  
    include "connection.php";
    $title = $_POST['title'];
    $categorie = $_POST['categorie'];
    $Volume = $_POST['volume'];
    $gouvernorat = $_POST['gouvernorat'];
    $Message = $_POST['message'];
    
  
$req = "INSERT INTO request(categorie,volume,location,note,req_title,isValid) VALUES('$categorie','$Volume','$gouvernorat','$Message','$title','0')";

$ok= mysqli_query($idcon,$req);

if($ok == FALSE)
    {
        echo "problème d'insertion";
   
    }
else
    {
 
        echo '<script>alert("request has been send successfully")</script>';

    }





