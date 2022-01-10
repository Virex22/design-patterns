<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionAvecFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

/**
 * Class square, elle contient les éléments extrinsèque, 
 * mais aussi la relation avec l'élément qui contient la combinaison d'élément intrinsèque
 */
class Square
{
    protected $id;    // 4 o
    protected $posX;    // 4 o
    protected $posY;    // 4 o

    /**
     * variation
     *
     * @var SquareVariation
     */
    protected $variation;

    /**
     * __construct
     *
     * @param  int $posX
     * @param  int $posY
     * @return void
     */
    public function __construct(int $posX, int $posY, SquareVariation $variation)
    {
        $this->posX = $posX;
        $this->posY = $posY;
        $this->id = uniqid("square_");
        $this->variation = $variation;
    }

    public function render()
    {
        $this->variation->render($this->id, $this->posY, $this->posX);
    }
}
