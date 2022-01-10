<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionAvecFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

/**
 * Ici notre élément contient tous les états intrinsèques 
 */
class SquareVariation
{
    protected $size;    // 4 o
    protected $image;   // 50 Mo

    public function __construct(int $size, string $image)
    {
        $this->size = $size;
        $this->image = $image;
    }

    /**
     * render
     *
     * @param  mixed $id
     * @param  mixed $posY
     * @param  mixed $posX
     * @return void
     */
    public function render(string $id, int $posY, int $posX)
    {
        echo "<style type=\"text/css\">
        #$id{" . PHP_EOL .
            "background-image : url(" . $this->image . ");" . PHP_EOL .
            "background-size: cover;" . PHP_EOL .
            "height : " . $this->size . "px;" . PHP_EOL .
            "width :" . $this->size . "px;" . PHP_EOL .
            "position : absolute;" . PHP_EOL .
            "top : " . $posY . "px;" . PHP_EOL .
            "left : " . $posX . "px;" . PHP_EOL .
            "}" . PHP_EOL .
            "</style>" . PHP_EOL;
        echo "<div id=\"$id\"></div>";
    }
}
