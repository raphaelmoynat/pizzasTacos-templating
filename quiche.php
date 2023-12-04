<?php require_once 'logique/logique.php';

$idQuiche= $_GET['id'];

$query = $pdoPlats->prepare("SELECT * FROM quiche WHERE id = :id");
$query->execute(["id"=>$idQuiche]);
$quiche =$query->fetch();



afficher('quiches/show',["quiche"=>$quiche]);
