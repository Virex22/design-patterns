<?php

declare(strict_types=1);

namespace App\Decorator;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractPhone
{
    abstract public function utilisation();
}
