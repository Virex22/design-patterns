<?php

declare(strict_types=1);

namespace App\Mediator;

require_once("../../autoload.php");

// Création de nos avions
$airplane = new Airplane("monPremierAvion");
$airplane2 = new Airplane("monDeuxiemeAvion");

// Création de nos helicopteres
$helicopter = new Helicopter("monPremierHelicoptere");
$helicopter2 = new Helicopter("monDeuxiemeHelicoptere");

// Création de notre mediator en lui passant les classes à supérvisé en paramètre
$mediator = new ControlTower([
    $airplane,
    $airplane2,
    $helicopter,
    $helicopter2
]);

// Tests
$airplane->land();
$helicopter->land();
$airplane->liftOff();
$helicopter->land();
