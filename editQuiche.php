<?php require_once "logique/logique.php";
if(isset($_POST['nom']) &&
  isset($_POST['description']) &&
  isset($_POST['image']) &&
  isset($_POST['id'])
) {
  $nom = $_POST['nom'];
  $description = $_POST['description'];
  $image = $_POST['image'];
  $id = $_POST['id'];

  //aussi ajouter une verification
  // //que les variables contiennent bien du texte

  $query = $pdoPlats->prepare("UPDATE quiche SET name = :name, description = :description, image = :image WHERE id = :id");

  $query->execute([
    "name" => $nom,
    "description" => $description,
    "image" => $image,
    "id" => $id
  ]);

  header("Location: toutesLesQuiches.php");

}




$id = $_GET['id'];



$query = $pdoPlats->prepare("SELECT * FROM quiche WHERE id = :id");

$query->execute([
  "id" => $id
]);

$quiche = $query->fetch();

afficher('quiches/edit', ["quiche"=>$quiche,
  "pageTitle"=> $quiche['name'] ]);
