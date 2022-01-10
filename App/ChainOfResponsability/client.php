<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

include_once(__DIR__ . "\\..\\..\\autoload.php");

// Création de notre Chain Of Responsability
$atm = new ATM();

// Demande de retrait de 846$
$atm->withdrawalMoney(846);
