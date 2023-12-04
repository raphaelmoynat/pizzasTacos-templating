<?php
require_once "debugmode.php";
require_once "logique/logique.php";

if(isset($_POST['nom']) &&
  isset($_POST['description']) &&
  isset($_POST['image'])
){
  $nom = $_POST['nom'];
  $description = $_POST['description'];
  $image = $_POST['image'];

  if (isset($nom) && isset($description) && isset($image)) {
    $query = $pdoPlats->prepare("INSERT INTO pizzas SET name = :name, description = :description, image = :image");

    $query->execute([
      "name" => $nom,
      "description" => $description,
      "image" => $image,
    ]);

    header("Location: toutesLesPizzas.php");
  }else{
    echo "Veuillez remplir tous les champs avec du texte.";

  }



}

afficher("pizza/create", ["pageTitle"=> "nouvelle quiche"]);
