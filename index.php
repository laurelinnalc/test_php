<?php

$ma_variable = 5;
$monAutreVARIABLE = 'toto'; // "toto"
$encoreUneAutreVariable = "yeah";


var_dump($monAutreVARIABLE, $ma_variable, $encoreUneAutreVariable);

function ma_fonction ($prenom) {
    echo "coucou $prenom\n";
}

echo "\tyouyouuuuuuuu\n";


$une_variable_qui_contient_un_prenom = "Marie";

ma_fonction($une_variable_qui_contient_un_prenom);


function hasErrors ($qty, $color) {
if ($qty < 1 || $qty > 100) {
echo"\la quantité selectionnée n'est pas correcte\n";
}

}

ma_fonction("Pierrot");
