<?php require_once 'logique/logique.php';

//var_dump($_POST['pizzaId']);

//trouver la bonne pizza

foreach ($baseDonneesPizzas as $pizza){

    if($pizza['id'] == $_POST['pizzaId']){

        $unePizza = $pizza;
    }
}

//appeler le bon template et lui passer la pizza trouvée

afficher("pizza/pizza", ["pizza"=>$unePizza]);