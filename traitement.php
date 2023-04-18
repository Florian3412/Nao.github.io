<!DOCTYPE html>
<html>
<head>
    <title>Accueil - Evenement Nao</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <div id="php">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $mail = $_POST["mail"];
  $age = $_POST["age"];


  // Exemple : afficher les données du formulaire
  echo "Nom : " . $nom . "<br>";
  echo "Prénom : " . $prenom . "<br>";
  echo "Age : " . $age . "<br>";
  echo "Mail : " . $mail . "<br>";
  
}
?>
</div>
</body>
</html>
