<?php require_once 'logique/logique.php';
require_once "debugmode.php";

$query = $pdoPlats->query("SELECT * FROM quiche");

$quiches = $query->fetchAll();


afficher("quiches/index", ["quiches"=>$quiches]);
