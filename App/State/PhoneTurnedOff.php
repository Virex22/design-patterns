<?php

declare(strict_types=1);

namespace App\State;

require_once("../../autoload.php");

class PhoneTurnedOff extends AbstractState
{
    public function button()
    {
        echo "Téléphone : Allume le téléphone" . PHP_EOL;
        $this->context->setIsOpen(true);
    }
}
