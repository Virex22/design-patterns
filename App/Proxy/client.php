<?php

declare(strict_types=1);

namespace App\Proxy;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Instanciation de notre proxy
$garage = new GarageProxy();

// Ici on ne pourra pas vendre 150 voitures, 
// car le proxy est la pour sécuriser et il supervise nos accès à la classe Garage
for ($i = 1; $i <= 150; $i++) {
    echo "$i > ";
    $garage->sellCar();
}

echo $garage->getCarCount();
