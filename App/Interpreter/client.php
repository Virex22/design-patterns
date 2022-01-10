<?php

declare(strict_types=1);

namespace App\Interpreter;

require_once("../../autoload.php");

// Création de notre interpréteur avec le calcul à résoudre
$pharser = new Pharser("5 + 5 + 5 + 2 + 8 - 15");

// Demande d'évaluation de notre calcule
echo $pharser->evaluate();
