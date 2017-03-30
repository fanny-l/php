<?php
try
{
	$req_delete = "DELETE FROM nomdematable 
				   WHERE id = ".$_GET['id'];
	$sql_delete = $db->prepare($req_delete);
	$sql_delete->execute();
}
catch(PDOException $ex)
{
	die("Erreur " . $ex->getMessage());
}
?>
