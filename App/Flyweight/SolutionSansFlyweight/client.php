<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionSansFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

/**
 * Que ce soit la sollution avec flyweight ou sans flyweight
 * le script client est identique
 */

$size = [
    50, // petit
    75, // moyen
    100  // grand
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
 * 1 square = (id)(posX)(posY)(size)(image)
 * 1 square = 4o + 4o + 4o + 4o + 50 000 000o (50Mo)
 * 1 square = 50 000 016o
 * 1000 x 1 square = 1000 * 50 000 016 o
 * 50 000 016 000 ~= 50Go
 */
