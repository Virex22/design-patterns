<?php

declare(strict_types=1);

namespace App\TemplateMethod;

require_once("../../autoload.php");

class VegeBurger extends AbstractBurger
{
    public function addSauce()
    {
        $this->composition[] = "Sauce ketchup";
    }

    // Le principe est de surcharger la méthode dans une classe à part,
    // mais de l'utiliser de la même manière que la classe pare
    public function addSteak()
    {
        $this->composition[] = "Steak Végétarien";
    }
    public function addBacon()
    {
        $this->composition[] = "Tranche de lard Végétarien";
    }
}
