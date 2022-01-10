<?php

declare(strict_types=1);

namespace App\Bridge\Colors;

use App\Bridge\IColor;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class Blue implements IColor
{
    public function getColorName(): string
    {
        return "blue";
    }

    public function getHTMLStyle(): string
    {
        return "background-color: blue;";
    }
}
