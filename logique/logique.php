<?php

$baseDonneesPizzas = [
    [
     "id" => 1,
    "name"=>"reine",
    "description"=> "olives jambon champignons"

    ],

    [
        "id" => 2,
        "name"=>"Quatre fromages",
        "description"=> "parmezan, bleu, chevre, mozzarella"

    ]
];

function afficher($nomDeTemplate, $donnees){

    ob_start();
  extract($donnees);

    require_once "templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";


}












