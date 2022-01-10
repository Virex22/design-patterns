<?php

declare(strict_types=1);

namespace App\Bridge\Shape;

use App\Bridge\AbstractShape;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class Rectangle extends AbstractShape
{
    public function draw()
    {
        echo "<style type=\"text/css\">
            #$this->_id{" . PHP_EOL .
            $this->_color->getHTMLStyle($this->_id) . PHP_EOL .
            "height : " . ($this->_size / 2) . "px;" . PHP_EOL .
            "width : $this->_size" . "px;" . PHP_EOL .
            "display : inline-block;" . PHP_EOL .
            "}" . PHP_EOL .
            "</style>" . PHP_EOL;
        echo "<div id=\"$this->_id\"></div>";
    }
}
