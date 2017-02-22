<?php
  // Sélection des données
  try
  {
    $req_utilisateurs = "SELECT colonne1, colonne2 
     FROM nomdematable";
    $sql_utilisateurs = $db->prepare($req_utilisateurs);
    $sql_utilisateurs->execute();
    $list_utilisateurs = $sql_utilisateurs->fetchAll();
  }
  catch(PDOException $ex)
  {
    die("Erreur " . $ex->getMessage());
  }

  // Affichage des données
  foreach ($list_utilisateurs as $ligne_utilisateurs) {
  echo $ligne_utilisateurs['nom'].' '.$ligne_utilisateurs['prenom'].'<br>';
  }
?>
