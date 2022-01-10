<?php

declare(strict_types=1);

namespace App\Mediator;

require_once("../../autoload.php");

/** 
 * Class qui jouera le rôle de mediator, 
 * Elle permetteras de ne pas gérer les relations dans les Objets
 */
class ControlTower implements MediatorInterface
{

    protected $airVehicles;

    public function __construct(array $airVehicles)
    {
        $this->airVehicles = $airVehicles;
        foreach ($this->airVehicles as  $airVehicle) {
            $airVehicle->canLanding();
            $airVehicle->setMediator($this);
        }
    }

    public function notify($sender, string $event): void
    {
        if ($event == "land")
            foreach ($this->airVehicles as $airVehicle)
                $airVehicle->canNotLanding();
        else if ($event == "lift-off")
            foreach ($this->airVehicles as $airVehicle)
                $airVehicle->canLanding();
    }
}
