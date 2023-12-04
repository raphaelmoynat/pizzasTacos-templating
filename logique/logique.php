<?php



$dbHost = "localhost:8889";
$dbNamePlats = "plats";
$usernamePlats ="utilisateurPlats";
$dbNameSushi = "sushis";
$usernameSushi = "utilisateurSushi";
$password = "azerty";

$pdoSushi = new PDO("mysql:host=$dbHost;dbname=$dbNameSushi",$usernameSushi,$password,
  [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
  ]);

$pdoPlats = new PDO ("mysql:host=$dbHost;dbname=$dbNamePlats",$usernamePlats,$password,
  [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
  ]
);


function afficher($nomDeTemplate, $donnees){

    ob_start();
  extract($donnees);

    require_once "templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";


}












