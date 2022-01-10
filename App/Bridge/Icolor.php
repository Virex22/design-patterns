<?php

declare(strict_types=1);

namespace App\Bridge;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * Interface couleurs qui sera demandé par nos formes
 */
interface Icolor
{
    public function getHTMLStyle(): string;
    public function getColorName(): string;
}
