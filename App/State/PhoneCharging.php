<?php

declare(strict_types=1);

namespace App\State;

require_once("../../autoload.php");

class PhoneCharging extends AbstractState
{
    public function button()
    {
        echo "Téléphone : Affiche le pourcentage de la batterie" . PHP_EOL;
    }
}
