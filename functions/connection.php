<?php
$idcon=mysqli_connect("localhost","root","");
if($idcon){
	$okbd=mysqli_select_db($idcon,"greenproject");
	if($okbd== TRUE)
	{

	}
	else
	{
    echo "Base incorrect<br>";
	}
}
else
{
echo "Erreur de connexion avec le serveur <br>";
}
