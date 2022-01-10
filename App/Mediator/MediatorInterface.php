<?php

declare(strict_types=1);

namespace App\Mediator;

require_once("../../autoload.php");

interface MediatorInterface
{
    public function notify(AbstractAirVehicle $sender, string $event): void;
}
