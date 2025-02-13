ct<?php
  // Sélection des données
  try
  {
    $req_select = "SELECT colonne1, colonne2 FROM nomdematable WHERE id = ".$_GET['id'];
    $sql_select = $db->prepare($req_select);
    $sql_select->execute();
    $ligne_select = $sql_select->fetch();
  }
  catch(PDOException $ex)
  {
    die("Erreur " . $ex->getMessage());
  }
?>

<!-- Exemple d'affichage des données dans un chamo de formulaire -->
<input type="text" name="nom" value="<?php echo $ligne_select['colonne1']; ?>">
