<?php require_once 'logique/logique.php';

$idPizza= $_GET['id'];

$query = $pdoPlats->prepare("SELECT * FROM pizzas WHERE id = :id");
$query->execute(["id"=>$idPizza]);
$pizza =$query->fetch();



afficher('pizza/show',["pizza"=>$pizza]);
