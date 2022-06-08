<?php
$idcon=mysqli_connect("localhost","root","");
if($idcon){
    echo "Connexion établie avec le serveur <br>";
	$okbd=mysqli_select_db($idcon,"greenproject");
	if($okbd== TRUE)
	{
	echo "Base correct<br>";
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
