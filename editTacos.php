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

  $query = $pdoPlats->prepare("UPDATE tacos SET name = :name, description = :description, image = :image WHERE id = :id");

  $query->execute([
    "name" => $nom,
    "description" => $description,
    "image" => $image,
    "id" => $id
  ]);

  header("Location: tousLesTacos.php");

}




$id = $_GET['id'];



$query = $pdoPlats->prepare("SELECT * FROM tacos WHERE id = :id");

$query->execute([
  "id" => $id
]);

$taco = $query->fetch();

afficher('tacos/edit', ["taco"=>$taco,
  "pageTitle"=> $taco['nom'] ]);
