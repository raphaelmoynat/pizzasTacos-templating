<?php require_once 'logique/logique.php';

$idTacos= $_GET['id'];

$query = $pdoPlats->prepare("SELECT * FROM tacos WHERE id = :id");
$query->execute(["id"=>$idTacos]);
$tacos =$query->fetch();



afficher('tacos/show',["taco"=>$tacos]);
