<?php

declare(strict_types=1);

namespace App\TemplateMethod;

require_once("../../autoload.php");

// Creation de notre burger normal
$normalBurger = new NormalBurger();
$normalBurger->DoBurger();
$normalBurger->showComposition("Burger normal");

// Creation de notre burger vegetarien
$vegeBurger = new VegeBurger();
$vegeBurger->DoBurger();
$vegeBurger->showComposition("Burger végétarien");
