<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionAvecFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

/**
 * Que ce soit la sollution avec flyweight ou sans flyweight
 * le script client est identique
 */

$size = [
    50, // Petit
    75, // Moyen
    100  // Grand
];

// Creation de nos liens d'image
$srcPath =  "../src/";
$images = [
    $srcPath . "brique.jpg",
    $srcPath . "cailloux.jpg",
    $srcPath . "terre.jpg",
    $srcPath . "gres.jpg",
    $srcPath . "herbe.png",
    $srcPath . "mur.png",
    $srcPath . "pierre.jpg"
];

// Création de notre fabrique
$squareFabric = new SquareFabric();

// Création de 1000 carrés sur la page
for ($i = 0; $i < 1000; $i++) {
    ($squareFabric->CreateSquare(
        mt_rand(0, 1750),
        mt_rand(0, 850),
        $size[array_rand($size)],
        $images[array_rand($images)]
    ))->render();
}

/**
 * Attention : c'est un exemple web
 */

/**
 * 1 square = (id)(posX)(posY)
 * 1 square = 4o + 4o + 4o
 * 1 square = 12 o
 * 1000 x 1 square = 1000 * 12
 * 12 000 ~= 12 ko
 * 
 * 1 squareVariation = (size)(image)
 * 1 squareVariation = 4o + 50 000 000 (50Mo)
 * 1 squareVariation = 50 000 004 o
 * (3*7)21 squareVariation = 21 * 50 000 004
 * 1 050 000 084 + 12 000 ~= 1.05Go
 * 
 * 
 * 50Go <=> 1.05Go !
 */
