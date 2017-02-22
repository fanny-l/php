<?php
// Si le champ ayant pour name "envoi" a été posté
if (isset($_POST['envoi'])) {
  // On met les données postées dans des variables
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
	// on exécute la requête d’insertion
  try
  {
    $req_insert = "INSERT INTO nomdematable 
           SET nom = '$nom', prenom = '$prenom'";
    $sql_insert = $db->prepare($req_insert);
    $sql_insert->execute();
  }
  catch(PDOException $ex)
  {
    die("Erreur " . $ex->getMessage());
  }
}
?>
