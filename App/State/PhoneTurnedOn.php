<?php

declare(strict_types=1);

namespace App\State;

require_once("../../autoload.php");

class PhoneTurnedOn extends AbstractState
{
    public function button()
    {
        echo "Téléphone : etein le téléphone" . PHP_EOL;
        $this->context->setIsOpen(false);
    }
}
