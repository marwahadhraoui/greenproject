<?php  
    include "connection.php";
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
  
$req = "SELECT role FROM USER WHERE email = '$email' and password = '$password'";
$result = $idcon->query($req);
if ($result->num_rows > 0) {
    // output role from the request
    $row = $result->fetch_assoc();
      if ($row["role"] == "USER"){
          
        header("location:userpage.html");
      }
      else if($row["role"] == "CHAUFFEUR"){
        header("location:chauffeurpage.html");
      }
      else if($row["role"] =="GARDIEN" )
     {
       
        header("location:gardienpage.html");

     }
    
  } else {
    echo "Invalid email or password !";
  }
