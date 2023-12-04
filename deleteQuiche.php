<?php require_once "debugmode.php";
require_once "logique/logique.php";

if(isset($_GET['id'])){

  $id = $_GET['id'];

  $query = $pdoPlats->prepare("DELETE FROM quiche WHERE id = :id");
  $query->execute([
    "id"=>$id
  ]);

  header('Location: toutesLesQuiches.php');
}
