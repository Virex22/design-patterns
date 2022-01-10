<?php

declare(strict_types=1);

namespace App\Bridge\Shape;

use App\Bridge\AbstractShape;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class Triangle extends AbstractShape
{
    public function draw()
    {
        echo "<style type=\"text/css\">
            #$this->_id{" . PHP_EOL .
            "display : inline-block;
            height : 0;
            width : 0;
            border-right : " . $this->_size / 2 . "px solid transparent;" . PHP_EOL .
            "border-bottom : " . $this->_size . "px solid " . $this->_color->getColorName() . ";" . PHP_EOL .
            "border-left : " . $this->_size / 2 . "px solid transparent;" . PHP_EOL .
            "}" . PHP_EOL .
            "</style>" . PHP_EOL;
        echo "<div id=\"$this->_id\"></div>";
    }
}
