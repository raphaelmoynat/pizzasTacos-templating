<?php require_once 'logique/logique.php';
require_once "debugmode.php";

$query = $pdoPlats->query("SELECT * FROM pizzas");

$pizzas = $query->fetchAll();


afficher("pizza/index", ["pizzas"=>$pizzas]);
