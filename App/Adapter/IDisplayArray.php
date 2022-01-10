<?php

declare(strict_types=1);

namespace App\Adapter;

include_once(__DIR__ . "\\..\\..\\autoload.php");

/**
 * L'interface qui doit être réspécter
 */
interface IDisplayArray
{
    public function setArray(array $arrayTodisplay);
    public function display();
}
