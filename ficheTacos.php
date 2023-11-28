<?php
require_once 'logique/logique.php';

//var_dump($_POST['pizzaId']);

//trouver la bonne pizza

foreach ($baseDonneesTacos as $taco) {

  if ($taco['id'] == $_POST['tacosId']) {

    $unTaco = $taco;
  }
}

//appeler le bon template et lui passer la pizza trouvée

afficher("tacos/taco", ["taco" => $unTaco]);


//afficher un seul tacos

//refaire la meme chose PLUSIEURS FOIS avec d'autres themes (sandiwich, desserts, boissons, etc)

// Créer une base de données, table pizzas, ajouter des pizzas, et utilisateur (privileges)
// PDO  : essayer de récuperer les pizzas de la BDD pour les utiliser dans l'application
//plutot que la variable du tableau des pizzas
