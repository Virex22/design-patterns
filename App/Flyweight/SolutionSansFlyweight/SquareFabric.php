<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionSansFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class SquareFabric
{
    public function CreateSquare(int $posX, int $posY, int $size, string $image)
    {
        return new Square($posX, $posY, $size, $image);
    }
}
