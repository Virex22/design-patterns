<?php

declare(strict_types=1);

namespace App\Proxy;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class Garage  implements GarageInterface
{
    public function sellCar(): void
    {
        echo "une voiture à été vendue à un habitant de la ville " . PHP_EOL;
    }
}
