<?php require_once 'logique/logique.php';
require_once "debugmode.php";

$query = $pdoSushi->query("SELECT * FROM carte");

$sushis = $query->fetchAll();


afficher("sushis/index", ["sushis"=>$sushis]);
