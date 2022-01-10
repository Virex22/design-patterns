<?php

declare(strict_types=1);

namespace App\Visitor;

require_once("../../autoload.php");

// Creation de nos différents visiteurs 
$debugLite = new LiteDebug();
$debugAdvanced = new AdvancedDebug();

// Creation de nos différents objets 
$human = new Human("vincent", 20);
$cat = new Cat("soraya", 5);

// Tests
$cat->accept($debugLite);
$human->accept($debugLite);

$cat->accept($debugAdvanced);
$human->accept($debugAdvanced);
