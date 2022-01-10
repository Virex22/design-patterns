<?php

declare(strict_types=1);

namespace App\Mediator;

require_once("../../autoload.php");

/** 
 * ElementConcret
 */
class Airplane extends AbstractAirVehicle
{
    public function __construct(string $name)
    {
        $this->name = "airplane_" . $name;
    }

    public function land()
    {
        if ($this->canLanding) {
            echo "l'avion \"" . $this->name . "\" est en train d'atterrir " . PHP_EOL;
            $this->mediator->notify($this, "land");
        } else
            echo "l'avion \"" . $this->name . "\" ne peut pas atterrir " . PHP_EOL;
    }

    public function liftOff()
    {
        echo "l'avion \"" . $this->name . "\" décolle " . PHP_EOL;
        $this->mediator->notify($this, "lift-off");
    }
}
