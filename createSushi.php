<?php
require_once "debugmode.php";
require_once "logique/logique.php";

if(isset($_POST['type']) &&
  isset($_POST['description']) &&
  isset($_POST['poisson'])
){
  $type = $_POST['type'];
  $description = $_POST['description'];
  $poisson = $_POST['poisson'];

  if (isset($type) && isset($description) && isset($poisson)) {
    $query = $pdo->prepare("INSERT INTO carte SET type = :type, description = :description, poisson = :poisson");

    $query->execute([
      "type" => $type,
      "description" => $description,
      "poisson" => $poisson,
    ]);

    header("Location: tousLesSushis.php");
  }else{
    echo "Veuillez remplir tous les champs avec du texte.";

  }



}


afficher("sushis/create", ["pageTitle"=> "nouveau sushi"]);
