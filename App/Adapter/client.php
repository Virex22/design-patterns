<?php

declare(strict_types=1);

namespace App\Adapter;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Affiche les tableaux avec la méthode d'affichage voulue 
 */
function showArrayWithDisplayer(array $array, IDisplayArray $displayer)
{
    $displayer->setArray($array);
    $displayer->display();
}

// tableau à afficher
$array = [
    "titre" => "mousse au chocolat",
    "ingredient" => [
        [
            "nom" => "chocolat noir",
            "quantité" => "100g"
        ], [
            "nom" => "Sucre vanillé",
            "quantité" => "1 Sachet"
        ], [
            "nom" => "Oeufs",
            "quantité" => "3"
        ]
    ],
    "preparation" => [
        "Séparer les blancs des jaunes d'oeufs.",
        "Faire ramollir le chocolat dans une casserole au bain-marie.",
        "Hors du feu, incorporer les jaunes et le sucre.",
        "Ajouter délicatement les blancs au mélange à l'aide d'une spatule.",
        "Verser dans une terrine ou des verrines.",
        "Mettre au frais 2h minimum.",
        "Décorer de cacao ou de chocolat râpé"
    ],
    "nombrePersonne" => 4
];

// Utilisation de notre fonction pour afficher notre tableau avec JSON
showArrayWithDisplayer($array, new AdapterArrayJSON());

// Alternative
// showArrayWithDisplayer($array, new DisplayArrayString());
