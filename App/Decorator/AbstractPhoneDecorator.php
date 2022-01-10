<?php

declare(strict_types=1);

namespace App\Decorator;

include_once(__DIR__ . "\\..\\..\\autoload.php");

abstract class AbstractPhoneDecorator extends AbstractPhone
{

    protected $composant;

    public function __construct(AbstractPhone $composant)
    {
        $this->composant = $composant;
    }

    public function utilisation()
    {
        $this->composant->utilisation();
    }
}
