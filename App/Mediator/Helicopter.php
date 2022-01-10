<?php

declare(strict_types=1);

namespace App\Mediator;

require_once("../../autoload.php");

/** 
 * ElementConcret
 */
class Helicopter extends AbstractAirVehicle
{
    public function __construct(string $name)
    {
        $this->name = "helicopter_" . $name;
    }

    public function land()
    {
        if ($this->canLanding) {
            echo "l'helicoptère \"" . $this->name . "\" est en train d'atterrir " . PHP_EOL;
            $this->mediator->notify($this, "land");
        } else
            echo "l'helicoptère \"" . $this->name . "\" ne peut pas atterrir " . PHP_EOL;
    }

    public function liftOff()
    {
        echo "l'helicoptère \"" . $this->name . "\" décolle " . PHP_EOL;
        $this->mediator->notify($this, "lift-off");
    }
}
