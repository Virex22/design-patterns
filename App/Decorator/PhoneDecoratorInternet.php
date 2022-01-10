<?php

declare(strict_types=1);

namespace App\Decorator;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class PhoneDecoratorInternet extends AbstractPhoneDecorator
{
    function utilisation()
    {
        parent::utilisation();
        echo "je peut allez sur internet !" . PHP_EOL;
    }
}
