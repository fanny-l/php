<?php
  // Sélection des données
  try
  {
    $req_select = "SELECT colonne1, colonne2 FROM nomdematable";
    $sql_select = $db->prepare($req_select);
    $sql_select->execute();
    $list_select = $sql_select->fetchAll();
  }
  catch(PDOException $ex)
  {
    die("Erreur " . $ex->getMessage());
  }

  // Affichage des données
  foreach ($list_select as $ligne_select) {
  echo $ligne_select['colonne1'].' '.$ligne_select['colonne2'].'<br>';
  }
?>
