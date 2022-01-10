<?php

declare(strict_types=1);

namespace App\Bridge\Colors;

use App\Bridge\IColor;

include_once(__DIR__ . "\\..\\..\\..\\autoload.php");

class Red implements IColor
{
    public function getHTMLStyle(): string
    {
        return "background-color: red;";
    }
    public function getColorName(): string
    {
        return "red";
    }
}
