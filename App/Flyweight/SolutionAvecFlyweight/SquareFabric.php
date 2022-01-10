<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionAvecFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class SquareFabric
{
    private $variations;
    public function CreateSquare(int $posX, int $posY, int $size, string $image)
    {
        return new Square($posX, $posY, $this->getVariation($size, $image));
    }

    public function getVariation(
        int $size,
        string $image
    ): SquareVariation {
        $key = $this->getKey($size, $image);

        if (!isset($this->variations[$key]))
            $this->variations[$key] = new SquareVariation($size, $image);

        return $this->variations[$key];
    }
    private function getKey($size, $image): string
    {
        return md5($size . $image);
    }
}
