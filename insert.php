<?php
include(connexion.php);

try
{
	$req_insert = 'INSERT INTO nomdematable 
   		       SET colonne1 = "valeur1", 
		       colonne2 = "valeur2", 
		       colonne3 = "valeur3"';
	$sql_insert = $db->prepare($req_insert);
	$sql_insert->execute();
}
catch(PDOException $ex)
{
	die("Erreur " . $ex->getMessage());
}
?>
