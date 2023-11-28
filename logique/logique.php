<?php

$baseDonneesPizzas = [
    [
     "id" => 1,
    "name"=>"reine",
    "description"=> "olives jambon champignons",
      "image"=> "https://colmar.coeur-paysan.com/wp-content/uploads/2022/05/CP-Colmar-Pizza-reine.png"

    ],

    [
        "id" => 2,
        "name"=>"Quatre fromages",
        "description"=> "parmezan, bleu, chevre, mozzarella",
      "image"=>"https://www.eurialfoodservice-industry.fr/wp-content/uploads/2020/06/166-PIZZA-4-FROMAGES.jpg"

    ]
];

$baseDonneesTacos = [
  [
    "id" => 1,
    "name"=>"Tacos Mexicain",
    "description"=> "Guacamole viande hachée épices poivrons",
    "image"=> "https://www.mesrecettes.leclerc/sites/default/files/styles/global_header_visuel/public/leclerc-recettes/recettes/images/tacos_2000x978px.jpg?itok=AtYsuYRh",

  ],

  [
    "id" => 2,
    "name"=>"Tacos Lyonnais",
    "description"=> "Viande Kebab, sauce mayo salade tomates oignons",
    "image"=>"https://lyonsecret.com/wp-content/uploads/2022/08/shutterstock_742948432.jpg",

  ]
];

$baseDonneesQuiche = [
  [
    "id" => 1,
    "name"=>"Quiche Lorraine",
    "description"=> "Oeufs Crème Lardon Gruyère",
    "image"=> "https://assets.afcdn.com/recipe/20221010/135915_w1024h1024c1cx999cy749cxt0cyt0cxb1999cyb1499.webp",

  ],

  [
    "id" => 2,
    "name"=>"Quiche au Thon",
    "description"=> "Thon moutarde tomates crème fraîche",
    "image"=>"https://img.cuisineaz.com/660x660/2013/12/20/i27758-quiche-au-thon.jpeg",

  ]
];



function afficher($nomDeTemplate, $donnees){

    ob_start();
  extract($donnees);

    require_once "templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";


}












