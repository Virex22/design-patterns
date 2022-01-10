<?php

declare(strict_types=1);

namespace App\Bridge;

use App\Bridge\Colors\Black;
use App\Bridge\Colors\Blue;
use App\Bridge\Colors\Gray;
use App\Bridge\Colors\Green;
use App\Bridge\Colors\Orange;
use App\Bridge\Colors\Red;
use App\Bridge\Colors\Yellow;
use App\Bridge\Shape\Circle;
use App\Bridge\Shape\Rectangle;
use App\Bridge\Shape\Square;
use App\Bridge\Shape\Triangle;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Taille en pixel de notre forme
$size = 150;

// On ajoute toute nos couleurs dans un tableau
$couleurs = [
    new Red(),
    new Yellow(),
    new Blue(),
    new Green(),
    new Black(),
    new Gray(),
    new Orange()
];

// on va crée toute les formes existante pour chaque couleurs
foreach ($couleurs as $couleur) {
    $forme = new Rectangle($size, uniqid("forme"), $couleur);
    $forme->draw();
    $forme = new Triangle($size, uniqid("forme"), $couleur);
    $forme->draw();
    $forme = new Circle($size, uniqid("forme"), $couleur);
    $forme->draw();
    $forme = new Square($size, uniqid("forme"), $couleur);
    $forme->draw();
}

/**
 * Attention : c'est un exemple web
 */
