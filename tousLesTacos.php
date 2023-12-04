<?php require_once 'logique/logique.php';
require_once "debugmode.php";

$query = $pdoPlats->query("SELECT * FROM tacos");

$tacos = $query->fetchAll();


afficher("tacos/index", ["tacos"=>$tacos]);
