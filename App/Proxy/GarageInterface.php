<?php

declare(strict_types=1);

namespace App\Proxy;

include_once(__DIR__ . "\\..\\..\\autoload.php");

interface GarageInterface
{
    public function sellCar(): void;
}
