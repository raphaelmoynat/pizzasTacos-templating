<?php
require_once 'logique/logique.php';

//var_dump($_POST['pizzaId']);

//trouver la bonne pizza

foreach ($baseDonneesQuiche as $quiche) {

  if ($quiche['id'] == $_POST['quicheId']) {

    $uneQuiche = $quiche;
  }
}

//appeler le bon template et lui passer la pizza trouvée

afficher("quiches/quiche", ["quiche" => $uneQuiche]);
