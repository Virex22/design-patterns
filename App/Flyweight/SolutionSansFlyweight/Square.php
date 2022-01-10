<?php

declare(strict_types=1);

namespace App\Flyweight\SolutionSansFlyweight;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class Square
{
    protected $id;    // 4 o
    protected $posX;    // 4 o
    protected $posY;    // 4 o
    protected $size;    // 4 o
    protected $image;   // 50 Mo

    /**
     * __construct
     *
     * @param  int $posX
     * @param  int $posY
     * @param  int $size
     * @param  string $image admettons que c'est vraiment une image et pas un chemin 
     * @return void
     */
    public function __construct(
        int $posX,
        int $posY,
        int $size,
        string $image
    ) {
        $this->posX = $posX;
        $this->posY = $posY;
        $this->size = $size;
        $this->image = $image;
        $this->id = uniqid("square_");
    }

    public function render()
    {
        echo "<style type=\"text/css\">
        #$this->id{" . PHP_EOL .
            "background-image : url(" . $this->image . ");" . PHP_EOL .
            "background-size: cover;" . PHP_EOL .
            "height : " . $this->size . "px;" . PHP_EOL .
            "width :" . $this->size . "px;" . PHP_EOL .
            "position : absolute;" . PHP_EOL .
            "top : " . $this->posY . "px;" . PHP_EOL .
            "left : " . $this->posX . "px;" . PHP_EOL .
            "}" . PHP_EOL .
            "</style>" . PHP_EOL;
        echo "<div id=\"$this->id\"></div>";
    }
}
