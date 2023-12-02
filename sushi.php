<?php require_once 'logique/logique.php';

$idSushi= $_GET['id'];

$query = $pdo->prepare("SELECT * FROM carte WHERE id = :id");
$query->execute(["id"=>$idSushi]);
$sushi =$query->fetch();



afficher('sushis/show',["sushi"=>$sushi]);





