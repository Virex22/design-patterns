<?php

declare(strict_types=1);

namespace App\Decorator;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class Phone extends AbstractPhone
{
    public function utilisation()
    {
        echo "je peut appeller !" . PHP_EOL;
    }
}
