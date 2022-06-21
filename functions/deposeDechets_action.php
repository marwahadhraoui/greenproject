<?php  
    include "connection.php";
    $categorie = $_POST['categorie'];
    $Volume = $_POST['volume'];
    $gouvernorat = $_POST['gouvernorat'];
    $Message = $_POST['Message'];
    
  
$req = "INSERT INTO request(categorie,volume,location,note,req_title,isValid) VALUES('$categorie','$Volume','$gouvernorat','$Message','depot de dechets','0')";

$ok= mysqli_query($idcon,$req);

if($ok == FALSE)
    {
        echo "problème d'insertion";
   
    }
else
    {
 
        echo '<script>alert("request has been send successfully")</script>';

    }



?>

