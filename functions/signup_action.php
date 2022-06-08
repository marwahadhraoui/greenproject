   <?php  
    include "connection.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
  
$req = "INSERT INTO user(username,password,email,number,role) VALUES('$username','$password','$email','$phone','USER')";

$ok= mysqli_query($idcon,$req);

if($ok == FALSE)
    {
        echo "problème d'insertion";
   
    }
else
    {
        //echo "Insertion effectuée avec succès";
        header("location:login.html");

    }



?>
