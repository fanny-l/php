<?php
$host 		= "localhost";
$username 	= "root";
$password 	= "root";
$dbname 	= "yourdatabase";

try
{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connexion réussie !"; 
}
catch(Exception $e)
{
	echo 'Une erreur est survenue !';
	die();
}
?>
