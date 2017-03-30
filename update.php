<?php
     try
     {
	$req_update = "UPDATE nomdematable 
   		       SET colonne1 = 'valeur1', colonne2 = 'valeur2', colonne3 = 'valeur3'
		       WHERE id = ".$_POST['id'];
	$sql_update = $db->prepare($req_update);
	$sql_update->execute();
     }
     catch(PDOException $ex)
     {
	die("Erreur " . $ex->getMessage());
     }
?>
