<?php
  // Sélection des données
  try
  {
    $req_films = "SELECT colonne1, colonne2 
     		  FROM nomdematable
     		  WHERE id = ".$_GET['id'];
    $sql_films = $db->prepare($req_films);
    $sql_films->execute();
    $ligne_films = $sql_films->fetch();
  }
  catch(PDOException $ex)
  {
    die("Erreur " . $ex->getMessage());
  }
?>

<!-- Exemple d'affichage des données dans un chamo de formulaire -->
<input type="text" name="nom" value="<?php echo $ligne_films['nom']; ?>">
