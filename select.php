<?php
  // Sélection des données
  try
  {
    $req_films = "SELECT colonne1, colonne2 
     FROM nomdematable";
    $sql_films = $db->prepare($req_films);
    $sql_films->execute();
    $list_films = $sql_films->fetchAll();
  }
  catch(PDOException $ex)
  {
    die("Erreur " . $ex->getMessage());
  }

  // Affichage des données
  foreach ($list_films as $ligne_films) {
  echo $ligne_films['nom'].' '.$ligne_films['prenom'].'<br>';
  }
?>
